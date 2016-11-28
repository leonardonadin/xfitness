<?php
require_once 'XFitnessController.php';
require_once './model/Pessoa.php';

class PessoaController extends XFitnessController{

  public function index(){
    $pessoa = new Pessoa();
    $pessoas = $pessoa->getPessoas();
    Response::get('view/pessoa/index.php', $pessoas);
  }

  public function create(){
    Response::get('view/pessoa/new.php');
  }

  public function update(){
    $pessoa = new Pessoa();
    $pessoa->update($_GET('cod'));
  }

  public function store(){
    $pessoa = new Pessoa();
    $msg = $pessoa->create();
    Response::post('view/pessoa/new.php', $_POST, $msg);
  }

  public function delete(){

  }
}
