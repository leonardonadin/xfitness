<br><br><br>
<?php
function autoFillable($field, $data){
  if(!empty($data)){
    if(array_key_exists($field, $data)){
      return $data[$field];
    }
  }
} ?>
<?php include '/view/template/head.php'; ?>
<?php include '/view/template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Pessoa</li>
        </ol>
        <a id="form_submit" class="pull-right btn btn-success" href="#">Salvar</a>
        <h2>Pessoas <small>/ editar</small></h2>
        <?php if(!empty($msg)){ ?>
          <br>
          <div class="panel-heading alert alert-danger">
            <?php if(is_array($msg)){
              var_dump($msg);
            }else{
              echo $msg;
            } ?>
          </div>
        <?php } ?>
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="atualizar?codpes=<?php echo autoFillable('codpes',$data); ?>" method="post" validate>
              <input type="hidden" name="codpes" value="<?php echo autoFillable('codpes',$data); ?>">
              <input type="hidden" name="_METHOD" value="PUT" />
              <?php include 'form.php'; ?>
            </form>
          </div>
        </div>
      </div>

    </div><!-- /.container -->


<?php include '/view/template/footer.php'; ?>
