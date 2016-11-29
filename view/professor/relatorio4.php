<?php include 'view/template/head.php'; ?>
<?php include 'view/template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Aluno</li>
          <li class="active">Relatório 04</li>
        </ol>
        <h1>Relatório 04</h1>
        <h4><small>Relacionar os professores que realizaram medições em mulheres com gordura corporal média em 2015</small></h4>
        <table class="table">
          <thead>
            <td>Código</td>
            <td>Nome</td>
          </thead>
          <tbody>
            <?php if(!empty($data)){
              if(is_array($data)){
                foreach ($data as $key => $value) { ?>
                  <tr>
                    <td>
                      <?php echo $value['codpro'] ?>
                    </td>
                    <td>
                      <?php echo $value['nompes'] ?>
                    </td>
                  </tr>
                <?php }
              }else{ ?>
                <td colspan="2">Não foram encontrados registros.</td>
              <?php }
            } ?>
          </tbody>
        </table>
      </div>
    </div><!-- /.container -->


<?php include 'view/template/footer.php'; ?>
