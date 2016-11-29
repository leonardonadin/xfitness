<?php include '/view/template/head.php'; ?>
<?php include '/view/template/menu.php'; ?>


    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Pessoa</li>
        </ol>
        <a class="pull-right btn btn-primary" href="pessoa/nova">Adicionar</a>
        <h2>Pessoas</h2>
        <div class="panel panel-default">
          <table class="table">
            <thead>
              <td>
                Código
              </td>
              <td>
                Nome
              </td>
              <td>
                Data de Nascimento
              </td>
              <td>
                Opções
              </td>
            </thead>
            <tbody>
              <?php if(!empty($data)){
                if(is_array($data)){
                  foreach ($data as $key => $value) { ?>
                    <tr>
                      <td>
                        <?php echo $value['codpes']; ?>
                      </td>
                      <td>
                        <?php echo $value['nompes']; ?>
                      </td>
                      <td>
                        <?php
                          $date = new DateTime($value['dtnaspes']);
                          echo $date->format('d-m-Y');
                        ?>
                      </td>
                      <td>
                        <div class="btn-toolbar" role="toolbar">
                          <a class="btn-group btn btn-success" role="group" href="/xfitness/pessoa/editar?codpes=<?php echo $value['codpes'] ?>">Editar</a>
                          <a class="btn-group btn btn-danger" role="group" href="/xfitness/pessoa/excluir?codpes=<?php echo $value['codpes'] ?>">Excluir</a>
                        </div>
                      </td>
                    </tr>
                  <?php }
                }
              } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- /.container -->


<?php include '/view/template/footer.php'; ?>
