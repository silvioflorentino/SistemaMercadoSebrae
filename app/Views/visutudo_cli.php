<?php
include_once("header.php");
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome do Cliente</th>
      <th scope="col">CPF do Cliente</th>
      <th scope="col">Telefone do Cliente</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($produtos as $produto): ?>

    <tr>
      <th scope="row"><?php echo($produto->codcli)?></th>
      <td><?php echo($produto->nomecli)?></td>
      <td><?php echo($produto->cpfcli)?></td>
      <td><?php echo($produto->celcli)?></td>
    </tr>

<?php endforeach; ?>

<?php
include_once("footer.php");
?>