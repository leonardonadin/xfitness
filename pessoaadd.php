<?php include 'template/head.php'; ?>
<?php include 'template/menu.php'; ?>

    <div class="container">

      <div class="content">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Pessoa</li>
        </ol>
        <a class="pull-right btn btn-success" href="#">Salvar</a>
        <h2>Pessoas <small>/ adicionar</small></h2>
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="index.html" method="post">
              <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                  <input type="text" name="nome" class="form-control" placeholder="Nome">
                </div>
              </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username">
                    <span class="input-group-addon" id="basic-addon2">@example.com</span>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label for="basic-url">Your vanity URL</label>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div><!-- /.container -->


<?php include 'template/footer.php'; ?>
