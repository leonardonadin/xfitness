<?php

class Redirect{

  const URL = 'http://localhost/xfitness';

  static function get($url, $statusCode = '303'){
    header('Location: ' . Redirect::URL.$url, true, $statusCode);
    echo "PHP continues.\n";
    die();
    echo "Not after a die, however.\n";
  }

  static function post($url, $data, $msg = '', $optional_headers = null){
    $data['msg'] = $msg;
    $params = array('http' => array(
                'method' => 'POST',
                'content' => $data
              ));
    if ($optional_headers !== null) {
      $params['http']['header'] = $optional_headers;
    }
    $ctx = stream_context_create($params);
    $fp = @fopen(Redirect::URL.$url, 'rb', false, $ctx);
    if (!$fp) {
      throw new Exception("Problem with $url, $php_errormsg");
    }
    $response = @stream_get_contents($fp);
    if ($response === false) {
      throw new Exception("Problem reading data from $url, $php_errormsg");
    }
    return $response;
  }
}
