<?php include 'template/head.php' ?>
<?php include 'template/menu.php' ?>

<div class="container">
  <div class="content">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="calculo.php">Calculo</a></li>
      <li class="active">Resultado</li>
    </ol>
    <h2>Calculo <small>/ resultado</small></h2>
    <?php if(array_key_exists('msg', $_GET)){ ?>
      <br>
      <div class="panel-heading alert alert-danger">
        <?php echo $_GET['msg']; ?>
      </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel pody">
        <br>
        <div class="row">
          <div class="form-group col-md-2"></div>
          <div class="form-group col-md-4">
            <label>Densidade Corporal: </label>
            <div class="panel-footer panel-primary">
              denmed
            </div>
          </div>
          <div class="form-group col-md-4">
            <label>Peso gordura</label>
            <div class="panel-footer panel-primary">
              pesgmed
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-2"></div>
          <div class="form-group col-md-4">
            <label>Peso magro: </label>
            <div class="panel-footer panel-primary">
              pesmmed
            </div>
          </div>
          <div class="form-group col-md-4">
            <label>Peso ideal</label>
            <div class="panel-footer panel-primary">
              pesimed
            </div>
          </div>
        </div>
        <div class="row">
          <div class="for,-group col-md-2"></div>
          <div class="form-group col-md-4">
            <label>Índice de massa corporal</label>
            <div class="panel-footer panel-primary">
              imdmed
            </div>
          </div>
          <div class="form-group col-md-4">
            <label>Razão Cintura-Quadril</label>
            <div class="panel-footer panel-primary">
              rcqmed
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include 'template/footer.php'; ?>
