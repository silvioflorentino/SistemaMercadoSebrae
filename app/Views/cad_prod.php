 <?php
 include_once("header.php");
 ?>
<form method="post" >
<div class="mb-3">
  <label for="produtoinput" class="form-label">Nome do Produto</label>
  <input type="text" name="nomeprod"class="form-control" id="produtoinput" placeholder="Exemplo: Arroz">
</div>

<div class="mb-3">
  <label for="marcainput" class="form-label">Marca do Produto</label>
  <input type="text" name="marcaprod" class="form-control" id="marcainput" placeholder="Exemplo: Camil">
</div>

<div class="mb-3">
    <label for="categoriainput" class="form-label">Categoria do Produto</label>
    <select class="form-select" name="categoriaprod"aria-label="Default select example" id="categoriainput">
        <option selected>Escolha a categoria</option>
        <option value="graos">Grãos</option>
        <option value="limpeza">Limpeza</option>
        <option value="laticinios">Laticínios</option>
    </select>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>

</form>
<?php
 include_once("footer.php");
 ?>