<?php include 'template/head.php' ?>
<?php include 'template/menu.php' ?>

  <div class="container">
    <div class="content">
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Calculo</li>
      </ol>
      <a id="form_submit" class="pull-right btn btn-success" href="#">Calcular</a>
      <h2>Gordura Corporal <small>/ calcular</small></h2>
      <?php if (array_key_exists('msg',$_GET)) { ?>
        <br>
        <div class="panel-heading alert alert-danger">
          <?php echo $_GET['msg']; ?>
        </div>
      <?php } ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="#controller/medicaocontrole" method="post" validate>
            <div class="row">
              <div class="form-group col-md-3">
                <input type="hidden" name="name" value="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="peso">Peso</label>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-balance-scale"></i></span>
                  <input type="text" name="pesmed" class="form-control" placeholder="Peso" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                  <input type="text" name="nompes" class="form-control" placeholder="Nome" required>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include 'template/footer.php' ?>
