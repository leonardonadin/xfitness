<nav class="navbar xf_bg-blue navbar-fixed-top xf-white">
  <div class="container">
    <div class="navbar-header xf-white">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand xf-white" href="index.php">XFitness</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse xf-white">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $path; ?>">Home</a></li>
        <li><a href="<?php echo $path."/pessoa.php" ?>">Pessoa</a></li>
        <li><a href="calculo.php">Calculo de Gordura Corporal</a></li>
        <li><a href="#laudos">Laudos</a></li>
        <li><a href="#sobre">Sobre</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li class="pull-right"><a href="login.php">Sair</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
