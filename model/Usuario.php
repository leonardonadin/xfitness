<?php
require_once 'XFitness.php';
require_once 'Pessoa.php';

/**
 *
 */
class Usuario extends XFitness
{
  protected $table = 'login';

  protected $pessoa;

  protected $data;

  public function login($email){
    $fields = '*';
    $result = $this->db->selectProcedure("login('email','email')");
    $this->data = $result->fetch(PDO::FETCH_ASSOC);
    return $this->data;
  }
}
