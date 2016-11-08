<?php
include 'XFitness.php';

/**
 *
 */
class Pessoa extends XFitness
{
  protected $table = 'pessoa';

  protected $columns = ['nome'];

  protected $error_messages = [
    'nome' => 'Informe um nome válido'
  ];

  protected function validateCreate($data = array()){
    return (!empty($data));
    if(!empty($data['nome'])){
      return 'nome';
    }
  }
}
