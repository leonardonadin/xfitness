<?php
require_once 'XFitness.php';
require_once 'Pessoa.php';

/**
 *
 */
class Aluno extends XFitness
{
  protected $table = 'aluno';

  protected $pessoa;

  protected $data;

  protected $columns = [
    'codalu',
    'estalu'
  ];

  protected $error_messages = [
    'codalu-vazio'        => 'Informe um nome válido',
    'estalu-vazio'        => 'Informe uma estatura válida'
  ];

  protected function validateCreate($data = array()){
    if(empty($data['codalu'])){
      return 'codalu-vazio';
    }
    if(empty($data['estalu'])){
      return 'estalu-vazio';
    }
    return true;
  }

  protected function getPessoa(){
    $this->pessoa = new Pessoa();
    $this->pessoa->getPessoa($this->data['codpes']);
  }

  public function relatorio(){
    $fields = '*';
    $db = new DB('relatorio1');
    $result = $db->select($fields);
    $data = array();
    while ($line = $result->fetch(PDO::FETCH_ASSOC)){
      $data[] = $line;
    };
    return $data;
  }
}
