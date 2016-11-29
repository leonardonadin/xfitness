<?php
foreach (glob("controller/*.php") as $filename){
  require_once $filename;
}
require_once 'Response.php';
require_once 'Redirect.php';

session_start();
if (isset($_SESSION) && (!empty($_SESSION))) {
  if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
  	unset($_SESSION['email']);
  	unset($_SESSION['senha']);
  	return Response::get('/login');
  }else{
    $logado = $_SESSION['email'];
  }
}else{
  $logado = false;
}

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
    if($method == 'POST'){
      if (array_key_exists('_METHOD', $_POST)) {
        $method = $_POST['_METHOD'];
      }
    }
    if(array_key_exists($path, $this->route)){
      if(array_key_exists($method, $this->route[$path])){
        $this->route[$path][$method]();
      }
    }else{
      Redirect::get('/login');
    }
  }
}


$router = new Router();

$router->add('/login', [new UsuarioController, 'index']);
$router->add('/entrar', [new UsuarioController, 'login'], 'POST');
$router->add('/logoff', [new UsuarioController, 'logoff']);

if($logado){
  $router->add('/pessoa', [new PessoaController, 'index']);
  $router->add('/pessoa/nova', [new PessoaController, 'create']);
  $router->add('/pessoa/salvar', [new PessoaController, 'store'], 'POST');
  $router->add('/pessoa/editar', [new PessoaController, 'edit']);
  $router->add('/pessoa/atualizar', [new PessoaController, 'update'], 'PUT');

  $router->add('/medicao/novo', [new MedicaoController, 'create']);
  $router->add('/medicao/editar', [new MedicaoController, 'update']);

  $router->add('/relatorios', [new RelatoriosController, 'index']);

  $router->add('/perfil', function(){
      Response::get('view/perfil.php');
  });

  $router->add('/', function(){
      Response::get('view/inicio.php');
  });
}


$router->execute();
