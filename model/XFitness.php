<?php
include 'db/db.php';

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
    foreach ($columns as $key => $value) {
      if(isset($_POST[$key])){
        $data[$key] = $_POST[$key];
      }
    }
    $validation = $this->validateCreate($data);
    if($validation === true){
      $this->db->insert(array('id', 'coluna'), array(1, 'valor'));
    }else{
      return $error_messages[$validation];
    }
  }

  protected function validateCreate($data = array()){
    return (!empty($data));
    if(gettype($data['coluna'])){
      return 'coluna';
    }
  }


}



?>
