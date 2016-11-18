<?php
include 'db/DB.php';

/**
 *
 */
class XFitness
{
  protected $db = null;

  protected $table = '';

  protected $columns = [];

  protected $error_messages = [];

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
    var_dump($data);
    if($validation === true){
      $this->db->insert($data);
    }else{
      return $this->error_messages[$validation];
    }
  }

  protected function validateCreate($data){
    if(gettype($data['coluna'])){
      return 'coluna';
    }
  }


}



?>
