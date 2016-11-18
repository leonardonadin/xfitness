<?php
include 'XFitnessController.php';
include '../model/Pessoa.php';

$method = $_SERVER["REQUEST_METHOD"];

if($method == 'GET'){
  header("pessoa.php");
}elseif($method == 'POST'){
  $pessoa = new Pessoa();
  $msg = $pessoa->create();
  post('/xfitness/pessoaadd.php', $msg);
}
