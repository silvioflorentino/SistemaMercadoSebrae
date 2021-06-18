<?php
 include_once("header.php");
 ?>
<form method="post" >


<div class="mb-3">
  <label for="clienteinput" class="form-label">Nome do Cliente</label>
  <input type="text" name="nomecli"class="form-control" id="clienteinput" placeholder="Exemplo: João Peixoto">
</div>

<div class="mb-3">
  <label for="cpfinput" class="form-label">CPF do Cliente</label>
  <input type="text" name="cpfcli"class="form-control" id="cpfinput" placeholder="Exemplo: João Peixoto">
</div>

<div class="mb-3">
  <label for="telefoneinput" class="form-label">Telefone do Cliente</label>
  <input type="text" name="celcli"class="form-control" id="telefoneinput" placeholder="Exemplo: João Peixoto">
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>

</form>
<?php
 include_once("footer.php");
 ?>