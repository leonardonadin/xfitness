<div class="row">
  <div class="form-group col-md-12">
    <label for="nome">Nome</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <input type="text" name="nompes" value="<?php echo autoFillable('nompes',$data); ?>" class="form-control" placeholder="Nome" required>
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="nome">Data de Nascimento</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <input type="date" name="dtnaspes" value="<?php echo autoFillable('dtnaspes',$data); ?>" class="form-control" placeholder="Data de Nascimento" required>
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
  <div class="form-group col-md-4">
    <label for="nome">E-mail</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <input type="email" name="emailpes" value="<?php echo autoFillable('emailpes',$data); ?>" class="form-control" placeholder="E-mail" required>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="senpes">E-mail</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
      <input type="password" name="senpes" class="form-control" placeholder="Senha" required>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="nome">Telefone</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <input type="text" name="telpes" value="<?php echo autoFillable('telpes',$data); ?>" class="form-control" placeholder="Telefone">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="nome">Estado Cívil</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <select class="selectpicker form-control" value="<?php echo autoFillable('civpes',$data); ?>" name="civpes">
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
      <input type="text" name="propes" value="<?php echo autoFillable('propes',$data); ?>" class="form-control" placeholder="Telefone">
    </div>
  </div>
</div>
