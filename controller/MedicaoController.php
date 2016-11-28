<?php
require_once 'XFitnessController.php';
require_once './model/Pessoa.php';

/**
 *
 */
class MedicaoController extends XFitnessController{

  public function index(){
    //$pessoa = new Pessoa();
    //$pessoas = $pessoa->getPessoas();
    Response::get('view/medicao/index.php');
  }

  public function create(){
    $pessoa = new Pessoa();
    $msg = $pessoa->create();
    Controller::post('view/medicao/new.php', $msg);
  }

  public function update(){
    $pessoa = new Pessoa();
    $pessoa->update($_GET('cod'));
  }

  public function store(){

  }

  public function delete(){

  }
}
