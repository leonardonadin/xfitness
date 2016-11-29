<?php include 'view/template/head.php'; ?>
<?php include 'view/template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Medição</li>
          <li class="active">Relatório 02</li>
        </ol>
        <h1>Relatório 02</h1>
        <h4><small>Relacionar o nome e a data de nascimento de alunos com menos de 20 anos</small></h4>
        <table class="table">
          <thead>
            <td>Código</td>
            <td>Data da medição</td>
            <td>Peso</td>
            <td>Estatura</td>
          </thead>
          <tbody>
            <?php if(!empty($data)){
              if(is_array($data)){
                foreach ($data as $key => $value) { ?>
                  <tr>
                    <td>
                      <?php echo $value['codmed'] ?>
                    </td>
                    <td>
                      <?php echo $value['datmed'] ?>
                    </td>
                    <td>
                      <?php echo $value['pesmed'] ?>
                    </td>
                    <td>
                      <?php echo $value['estalu'] ?>
                    </td>
                  </tr>
                <?php }
              }
            }else{ ?>
              <td colspan="4">Não foram encontrados registros.</td>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div><!-- /.container -->


<?php include 'view/template/footer.php'; ?>
