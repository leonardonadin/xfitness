<?php
require_once 'db/DB.php';

class XFitness{
  protected $db = null;

  protected $table = '';

  protected $primary_key = '';

  protected $columns = [];

  protected $error_messages = [];

  protected $success_message = '';

  function __construct(){
    $this->db =  new DB($this->table);
  }

  public function create(){
    $data = [];
    foreach ($this->columns as $key) {
      if(isset($_POST[$key])){
        $data[$key] = $_POST[$key];
      }
    }
    $validation = $this->validateCreate($data);
    if($validation === true){
      $data = $this->sanitizeCreate($data);
      $result = $this->db->insert($data);
      if($result){
        return $this->success_message;
      }else{
        return $result;
      }
    }else{
      return $this->error_messages[$validation];
    }
  }

  protected function validateCreate($data){
    if(gettype($data['coluna'])){
      return 'coluna';
    }
  }

  protected function sanitizeCreate($data = array()){
    return $data;
  }

  public function update($cod){
    $data = [];
    foreach ($this->columns as $key) {
      if(isset($_POST[$key])){
        $data[$key] = $_POST[$key];
      }
    }
    $validation = $this->validateCreate($data);
    if($validation === true){
      $result = $this->db->update($this->columns, $data, $this->primary_key."=".$cod);
      if($result){
        return $this->success_message;
      }else{
        return $result;
      }
    }else{
      return ['error'=>$this->error_messages[$validation]];
    }
  }

  protected function validateUpdate($data){
    if(gettype($data['coluna'])){
      return 'coluna';
    }
  }


}



?>
