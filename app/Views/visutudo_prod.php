<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Marca</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        foreach($produtos as $produto):
  ?>
    <tr>
    <th scope="row"><?php echo($produto->codprod);?></th>
    <td> <?php echo($produto->nomeprod);?></td>
    <td> <?php echo($produto->categoriaprod);?></td>
    <td> <?php echo($produto->marcaprod);?></td>
    </tr>
  <?php
  endforeach
  ?>
  </tbody>
</table>