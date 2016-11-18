<?php include 'template/head.php'; ?>
<?php include 'template/menu.php'; ?>

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
            <form action="controller/PessoaController.php" method="post" validate>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="nome">Nome</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="text" name="nompes" class="form-control" placeholder="Nome" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="nome">Data de Nascimento</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="date" name="dtnaspes" class="form-control" placeholder="Data de Nascimento" required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nome">Sexo</label>
                  <div class="input-group">
                    <label for="sexpes"><input type="radio" name="sexpes" value="M" class="form-control">Masculino</label>
                    <label for="sexpes"><input type="radio" name="sexpes" value="F" class="form-control">Feminino</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-7">
                  <label for="nome">E-mail</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="email" name="emailpes" class="form-control" placeholder="E-mail" required>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="nome">Telefone</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="text" name="telpes" class="form-control" placeholder="Telefone">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="nome">Estado Cívil</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <select class="selectpicker form-control" name="civpes">
                      <option value="casado">Casado(a)</option>
                      <option value="solteiro">Solteiro(a)</option>
                      <option value="viuvo">Viúvo(a)</option>
                      <option value="separado">Separado(a)</option>
                      <option value="divorciado">Divorciado(a)</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nome">Profissão</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="text" name="propes" class="form-control" placeholder="Telefone">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div><!-- /.container -->


<?php include 'template/footer.php'; ?>
