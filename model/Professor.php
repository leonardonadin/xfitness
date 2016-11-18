<?php
include 'XFitness.php';

/**
 *
 */
class Professor extends XFitness
{
  protected $table = 'professor';

  protected $columns = [
    'codpes'
  ];

  protected $error_messages = [
    'codpes-vazio'        => 'Informe um nome válido'
  ];

  protected function validateCreate($data = array()){
    if(empty($data['codpes'])){
      return 'codpes-vazio';
    }
    return true;
  }
}
