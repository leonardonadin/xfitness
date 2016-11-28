<?php
require_once 'XFitnessController.php';
require_once './model/Pessoa.php';
require_once './model/Aluno.php';
require_once './model/Medicao.php';

/**
 *
 */
class RelatoriosController extends XFitnessController{

  public function index(){
    if(array_key_exists('relatorio',$_GET)){
      $relatorio = $_GET['relatorio'];
      $result = [];
      if($relatorio == 1){
        $aluno = new Aluno();
        $result = $aluno->relatorio();
        Response::get('view/aluno/relatorio1.php', $result);
      }elseif ($relatorio == 2) {
        $medicao = new Medicao();
        $result = $medicao->relatorio();
        Response::get('view/medicao/relatorio2.php', $result);
      }
    }else{
      Response::get('view/relatorios.php');
    }
  }
}
