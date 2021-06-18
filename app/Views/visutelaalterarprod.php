<h2>Corrigir dados do Produto</h2>
<p>Qual produto deseja Corrigir? </p>

<form method="post" >

<div class="mb-3">
  <label for="produtoinput" class="form-label">Código do Produto</label>
  <input type="text" name="codprod"class="form-control" id="produtoinput" placeholder="Exemplo: 3434">
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Buscar</button>
</div>

</form>


<form method="post" >

<div class="mb-3">
  <label for="produtocodinput" class="form-label">Código do Produto</label>
  <input type="text" name="codprodFK" value = "<?php echo(isset($produtos->codprod)? $produtos->codprod:"");?>"  class="form-control" id="produtocodinput" placeholder="Exemplo: 3434">
</div>

<div class="mb-3">
  <label for="produtoinput" class="form-label">Nome do Produto</label>
  <input type="text" name="nomeprod" value="<?php echo(isset($produtos->nomeprod)? $produtos->nomeprod : "");?>"  class="form-control" id="produtoinput" placeholder="Exemplo: Arroz">
</div>

<div class="mb-3">
  <label for="marcainput" class="form-label">Marca do Produto</label>
  <input type="text" name="marcaprod" value="<?php echo(isset($produtos->marcaprod)? $produtos->marcaprod : "");?>" class="form-control" id="marcainput" placeholder="Exemplo: Camil">
</div>

<div class="mb-3">
    <label for="categoriainput" class="form-label">Categoria do Produto</label>
    <select class="form-select" name="categoriaprod"aria-label="Default select example" id="categoriainput">
        <option selected value="<?php echo(isset($produtos->categoriaprod)? $produtos->categoriaprod:"");?>"><?php echo(isset($produtos->categoriaprod)?$produtos->categoriaprod: "");?></option>
        <option value="graos">Grãos</option>
        <option value="limpeza">Limpeza</option>
        <option value="laticinios">Laticínios</option>
    </select>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
</div>

</form>