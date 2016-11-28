<?php
require_once 'XFitness.php';
require_once 'Pessoa.php';

/**
 *
 */
class Professor extends XFitness
{
  protected $table = 'professor';

  protected $pessoa;

  protected $data;

  protected $columns = [
    'codpro'
  ];

  protected $error_messages = [
    'codpro-vazio'        => 'Informe um nome válido'
  ];

  protected function validateCreate($data = array()){
    if(empty($data['codpro'])){
      return 'codpro-vazio';
    }
    return true;
  }

  protected function getPessoa(){
    $this->pessoa = new Pessoa();
    $this->pessoa->getPessoa();
  }
}
