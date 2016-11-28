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
        <table class="table">
          <thead>
            <td>Código</td>
            <td>Nome</td>
            <td>Data de Nascimento</td>
          </thead>
          <tbody>
            <?php if(!empty($data)){
              if(is_array($data)){
                foreach ($data as $key => $value) { ?>
                  <tr>
                    <td>
                      <?php echo $value['codpes'] ?>
                    </td>
                    <td>
                      <?php echo $value['nompes'] ?>
                    </td>
                    <td>
                      <?php echo $value['dtnaspes'] ?>
                    </td>
                  </tr>
                <?php }
              }
            } ?>
          </tbody>
        </table>
      </div>
    </div><!-- /.container -->


<?php include 'view/template/footer.php'; ?>
