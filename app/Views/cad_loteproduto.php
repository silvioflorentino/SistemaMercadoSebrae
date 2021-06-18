<h2>Cadastro do lote do Produto</h2>
<p>Qual produto deseja inserir no lote? </p>

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
<label for="produtoinput" class="form-label">Produto</label>
  <input type="text" name="nomeprod" value = "<?php echo(isset($produtos->nomeprod)?$produtos->nomeprod:"");?>" class="form-control" id="clienteinput"  placeholder="Exemplo: Omo">
</div>

<div class="mb-3">
  <label for="datainput" class="form-label">Data de Validade</label>
  <input type="date" name="dataval"class="form-control" id="datainput" placeholder="Exemplo: João Peixoto">
</div>

<div class="mb-3">
  <label for="qtdinput" class="form-label">Quantidade</label>
  <input type="number" name="qtdval"class="form-control" id="qtdinput" placeholder="Exemplo: João Peixoto">
</div>

<div class="mb-3">
  <label for="unidadeinput" class="form-label">Unidade de medida</label>
  <input type="text" name="unidade"class="form-control" id="unidadeinput" placeholder="Exemplo: João Peixoto">
</div>

<div class="mb-3">
  <label for="precounitfinprodinput" class="form-label">Valor de Venda</label>
  <input type="text" name="precounitfinprod"class="form-control" id="precounitfinprodinput" placeholder="Exemplo: João Peixoto">
</div>



<div class="col-12">
<button type="submit" class="btn btn-primary">Salvar</button>
<a href="<?php echo site_url('../LoteProdutoController/inserirlote')?>" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Salvar</a>
</div>

</form>

<?php echo(isset($msg)?$msg:"");?>
