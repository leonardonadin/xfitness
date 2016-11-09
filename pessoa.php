<?php include 'template/head.php'; ?>
<?php include 'template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Pessoa</li>
        </ol>
        <a class="pull-right btn btn-primary" href="<?php echo $path; ?>pessoaadd">Adicionar</a>
        <h2>Pessoas</h2>
        <div class="panel panel-default">
          <table class="table">
            <thead>
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
              <tr>
                <td>
                  Nome
                </td>
                <td>
                  10/10/1010
                </td>
                <td>
                  <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group btn btn-success" role="group">Editar</div>
                    <div class="btn-group btn btn-danger" role="group">Excluir</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  Nome
                </td>
                <td>
                  10/10/1010
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- /.container -->


<?php include 'template/footer.php'; ?>
