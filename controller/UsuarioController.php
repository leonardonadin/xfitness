<?php
require_once 'XFitnessController.php';
require_once './model/Pessoa.php';
require_once './model/Usuario.php';

class UsuarioController extends XFitnessController{

  public function index(){
    Response::get('view/login/index.php');
  }

  public function login(){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $usuario = new Usuario();
    var_dump($email);
    $result = $usuario->login($email);
    if(!empty($result)){
        if($result['login']){
          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          Redirect::get('/');
        }else{
        	unset ($_SESSION['email']);
        	unset ($_SESSION['senha']);
        	Redirect::get('/teste');
        }
    }else{
      var_dump($result);
    }
  }

  public function logoff(){
    if (isset($_SESSION)) {
      if((isset ($_SESSION['email']) == true) and (isset ($_SESSION['senha']) == true)){
      	unset($_SESSION['email']);
      	unset($_SESSION['senha']);
      	return Redirect::get('/login');
      }
    }else {
      return Redirect::get('/');
    }
  }
}
