<?php
  
  $erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
  $erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CONTROLE FINANCEIRO</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
  div.labelC{
    top: 50%;
    height: 3em;
    text-align: center
  }
  div.botao{
    text-align: center
  }

</style>
</head>
<body> <div class="container"><br>
 <div class="labelC"> <p>CADASTRE-SE</p></div>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNome">Nome</label>
      <input type="text" class="form-control" id="inputNome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Complemento</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>MG</option>
        <option>SP</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div>
  
 <div class="botao"> <button type="submit" id="botao" class="btn btn-primary">Cadastrar</button>
 <br>
    <br>
    <a href="indexx.php">Voltar ao Login</a></div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</div></body>
</html>
