<?php
function autoFillable($field){}?>
<?php include '/view/template/head.php'; ?>
<?php include '/view/template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Pessoa</li>
        </ol>
        <a id="form_submit" class="pull-right btn btn-success" href="#">Salvar</a>
        <h2>Pessoas <small>/ adicionar</small></h2>
        <?php if(array_key_exists('msg', $_GET)){ ?>
          <br>
          <div class="panel-heading alert alert-danger">
            <?php echo $_GET['msg']; ?>
          </div>
        <?php } ?>
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="salvar" method="post" validate>
              <?php include 'form.php'; ?>
            </form>
          </div>
        </div>
      </div>

    </div><!-- /.container -->


<?php include '/view/template/footer.php'; ?>
