<?php include 'view/template/head.php'; ?>
<?php include 'view/template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Aluno</li>
          <li class="active">Relatório 01</li>
        </ol>
        <h1>Relatório 01</h1>
        <h4><small>Relacionar o nome e a data de nascimento de alunos com menos de 20 anos</small></h4>
            <?php if(!empty($data)){
              foreach ($data as $key => $value) {?>
                Existem <?php echo $value['count']; ?> alunos do sexo <?php echo $key; ?> realizaram as medições entre 2014 e 2015
              <?php } ?>
            <?php }else{ ?>
              <td>Não foram encontrados registros.</td>
            <?php } ?>
      </div>
    </div><!-- /.container -->


<?php include 'view/template/footer.php'; ?>
