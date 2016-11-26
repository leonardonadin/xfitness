<?php include 'template/head.php' ?>
<?php include 'template/menu.php' ?>

  <div class="container">
    <div class="content">
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Calculo</li>
      </ol>
      <a id="form_submit" class="pull-right btn btn-success" href="calculores.php">Calcular</a>
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
              <div class="form-group col-md-0">
                <input type="hidden" name="name" value="">
              </div>
              <div class="form-group col-md-2"></div>
              <div class="form-group col-md-4">
                <label for="datmed">Data</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="date" name="datmed" class="form-control" placeholder="Data" required>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="pesmed">Peso</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
                  <input type="text" name="pesmed" class="form-control" placeholder="Peso" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="tridcmed">Dobra cutânea do tríceps</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                  <input type="text" name="tridcmed" class="form-control" placeholder="Dobra cutânea do tríceps" required>
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="adbcmed">Dobra cutânea do abdômen</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                  <input type="text" name="advcmed" class="form-control" placeholder="Dobra cutânea do abdômen" required>
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="sildcmed">Dobra cutânea supra ilíaca</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                  <input type="text" name="sildcmed" class="form-control" placeholder="Dobra cutânea supra ilíaca" required>
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="coxdcmed">Dobra cutânea da coxa</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                  <input type="text" name="coxdcmed" class="form-control" placeholder="Dobra cutânea da coxa" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="sesdcmed">Dobra cutânea subescapular</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                  <input type="text" name="sesdcmed" class="form-control" placeholder="Dobra cutânea subescapular" required>
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="quacimed">Circunferência do Quadril</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                  <input type="text" name="quacimed" class="form-control" placeholder="Circunferência do Quadril" required>
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="pescimed">Circunferência do pescoço</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                  <input type="text" name="pescimed" class="form-control" placeholder="Circunferência do pescoço" required>
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="cincimed">Circunferência da cintura</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                  <input type="text" name="cincimed" class="form-control" placeholder="Circunferência da cintura" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4"></div>
              <div class="for-group col-md-4">
                <label for="gormed">Porcentagem de gordura</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
                  <input type="text" name="gormed" class="form-control" placeholder="Porcentagem de gordura" required>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include 'template/footer.php' ?>
