<?php
foreach (glob("controller/*.php") as $filename){
  require_once $filename;
}
require_once 'Response.php';

// The router code
class Router{
  function add($route,callable $c, $method = 'GET'){
    $this->route['/xfitness'.$route][$method] = $c;
  }
  function execute(){
    $server = $_SERVER;
    $info = 'PATH_INFO';
    //$path = isset($server[$info]) ? $server[$info] : '/';
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];
    if(array_key_exists($path, $this->route)){
      $this->route[$path][$method]();
    }else{
      Response::get('404.php');
    }
  }
}


$router = new Router();

$router->add('/pessoa', [new PessoaController, 'index']);
$router->add('/pessoa/nova', [new PessoaController, 'create']);
$router->add('/pessoa/salvar', [new PessoaController, 'store'], 'POST');

$router->add('/medicao/novo', [new MedicaoController, 'create']);
$router->add('/medicao/editar', [new MedicaoController, 'update']);

$router->add('/relatorios', [new RelatoriosController, 'index']);

$router->add('/', function(){
    Response::get('view/inicio.php');
});


$router->execute();
