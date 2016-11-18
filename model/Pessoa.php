<?php
include 'XFitness.php';

/**
 *
 */
class Pessoa extends XFitness
{
  protected $table = 'pessoa';

  protected $columns = [
    'nompes',
    'dtnaspes',
    'emailpes',
    'sexpes',
    'telpes',
    'civpes',
    'propes'
  ];

  protected $error_messages = [
    'nompes-vazio'        => 'Informe um nome válido',
    'dtnaspes-vazio'    => 'Informe uma data de nascimento',
    'emailpes-vazio'    => 'Informe um e-mail valido',
    'sexpes-vazio'      => 'Informe o sexo'
  ];

  protected function validateCreate($data){
    if(empty($data['nompes'])){
      return 'nompes-vazio';
    }
    if(empty($data['dtnaspes'])){
      return 'dtnaspes-vazio';
    }
    if(empty($data['emailpes'])){
      return 'emailpes-vazio';
    }
    if(empty($data['sexpes'])){
      return 'sexpes-vazio';
    }
    return true;
  }
}
