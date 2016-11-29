<?php
require_once 'XFitness.php';

/**
 *
 */
class Pessoa extends XFitness
{
  protected $table = 'pessoa';

  protected $data;

  protected $primary_key = 'codpes';

  protected $success_message = 'Pessoa adicionada com sucesso!';

  protected $columns = [
    'nompes',
    'dtnaspes',
    'emailpes',
    'sexpes',
    'telpes',
    'civpes',
    'propes',
    'senpes'
  ];

  protected $error_messages = [
    'nompes-vazio'      => 'Informe um nome válido',
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

  protected function sanitizeCreate($data = array()){
    $data['senpes'] = md5($data['senpes']);
    return $data;
  }

  public function getPessoa($codpes){
    $fields = '*';
    $where = 'codpes='.$codpes;
    $result = $this->db->select($fields);
    $this->data = $result->fetch(PDO::FETCH_ASSOC);
    return $this->data;
  }

  public function getPessoas(){
    $fields = '*';
    $result = $this->db->select($fields);
    $pessoas = array();
    while ($line = $result->fetch(PDO::FETCH_ASSOC)){
      $pessoas[] = $line;
    };
    return $pessoas;
  }
}
