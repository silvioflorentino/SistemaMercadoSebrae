<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Supermercado Etec Sebrae</title>
</head>
<body style="padding: 20%">
<div class="container">
<form action="<?=base_url('Home/esqueciSenha');?>" method="Post" style="padding: 20%">
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Usuário:</label>
    <input type="email" name="usuario" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartilhe seu usuário e senha.</div>
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Senha:</label>
    <input type="password" name="pin" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Acessar</button>
 </form>
</div>
</body>
</html>