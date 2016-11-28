<?php
/**
 *
 */
class Response{

  const URL = 'http://localhost/xfitness';

  static function get($file, $data = array()){
    $data = $data;
    include $file;
  }

  static function post($file, $data = array(), $msg = ''){
    $data = $data;
    $msg = $msg;
    include $file;
  }
}


 ?>
