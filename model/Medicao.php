<?php
require_once 'XFitness.php';
require_once 'Pessoa.php';

/**
 *
 */
class Medicao extends XFitness
{
  protected $table = 'medicao';

  protected $data;

  public function relatorio(){
    $fields = '*';
    $db = new DB('relatorio2');
    $result = $db->select($fields);
    $data = array();
    while ($line = $result->fetch(PDO::FETCH_ASSOC)){
      $data[] = $line;
    };
    return $data;
  }
}
