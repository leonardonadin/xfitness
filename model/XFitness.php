<?php
require_once 'db/DB.php';

/**
 *
 */
class XFitness{
  protected $db = null;

  protected $table = '';

  protected $columns = [];

  protected $error_messages = [];

  protected $success_message = '';

  function __construct()
  {
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
      $this->db->insert($data);
      return $this->success_message;
    }else{
      return $this->error_messages[$validation];
    }
  }

  protected function validateCreate($data){
    if(gettype($data['coluna'])){
      return 'coluna';
    }
  }

  //LARAVEL CRUD

  public function update(){
    $data = [];
    foreach ($this->columns as $key) {
      if(isset($_POST[$key])){
        $data[$key] = $_POST[$key];
      }
    }
    $validation = $this->validateCreate($data);
    var_dump($data);
    if($validation === true){
      $this->db->insert($data);
      return $this->success_message;
    }else{
      return $this->error_messages[$validation];
    }
  }

  protected function validateUpdate($data){
    if(gettype($data['coluna'])){
      return 'coluna';
    }
  }


}



?>
