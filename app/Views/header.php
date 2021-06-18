<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./././public/css/style.css">
    <title>Supermercado Etec Sebrae</title>
</head>
<?php
           $data['session'] = \Config\Services::session();

           if ($data['session']->get('nivelusu') == "Gerente") {
            $nivel = "visible";
          }else{
            $nivel = " style='display:none;' ";
          }
        ?>
<body class="bg-light bg-gradient">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light  shadow-lg rounded-pill" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SM Sebrae</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('./home/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Caixa</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Entrada
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo site_url('../ProdController/inserir')?>">Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../LoteProdutoController/listaCodProduto')?>">Lote</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../CliController/inserir')?>">Clientes</a></li>
            <li <?=$nivel?>><a class="dropdown-item" href="<?php echo site_url('../UsuController/inserirusuario')?>">Usuários</a></li>
            <li <?=$nivel?>><a class="dropdown-item" href="#">Funcionários</a></li>
          </ul>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pesquisar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo site_url('../ProdController/lista')?>">Lista Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../CliController/lista')?>">Lista Clientes</a></li>
            <li><a class="dropdown-item" href="#">Por Marca</a></li>
            <li><a class="dropdown-item" href="#">Por Tipo</a></li>
          </ul>
        </li>
  
        <li class="nav-item dropdown" <?=$nivel?>>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Corrigir
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo site_url('../ProdController/listaAltCodProd')?>">Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../LoteProdutoController/listaCodProduto')?>">Lote</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../CliController/inserir')?>">Clientes</a></li>
            <li><a class="dropdown-item" href="#">Usuários</a></li>
            <li><a class="dropdown-item" href="#">Funcionários</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"<?=$nivel?>>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Apagar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo site_url('../ProdController/listaApagarCodProd')?>">Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../LoteProdutoController/listaCodProduto')?>">Lote</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('../CliController/inserir')?>">Clientes</a></li>
            <li><a class="dropdown-item" href="#">Usuários</a></li>
            <li><a class="dropdown-item" href="#">Funcionários</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('../Home/logout')?>">Sair</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"> <?php echo($data['session']->get('nomeFunc'));?> </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<h1 class="text-center fw-bold" > Supermercado Etec Sebrae </h1>
  

