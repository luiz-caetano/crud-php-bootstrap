<?php
require('conexao.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>

    <?php include('navbar.php'); ?>
    
     <div class="container mt-4">
      <?php include('mensagem.php'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Clientes
                <a href="criar-cliente.php" class="btn btn-primary float-end">Cadastrar Cliente</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CNPJ-CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = 'SELECT 
                      C.ID as cliente_id, 
                      C.NOME as nome, 
                      C.CNPJ_CPF as cnpj_cpf, 
                      C.ENDERECO as endereco,
                      C.CIDADE_ID as cidade_id,
                      C.TELEFONE as telefone, 
                      CI.NOME AS CIDADE
                      from cliente C, cidade CI where CI.ID = C.CIDADE_ID';
                  $clientes = mysqli_query($conexao, $sql);
                  if (mysqli_num_rows($clientes) > 0) {
                    foreach($clientes as $cliente) {
                  ?>
                  <tr>
                    <td><?=$cliente['cliente_id']?></td>
                    <td><?=$cliente['nome']?></td>
                    <td><?=$cliente['cnpj_cpf']?></td>
                    <td><?=$cliente['endereco']?></td>
                    <td><?=$cliente['telefone']?></td>
                    <td><?=$cliente['CIDADE']?></td>
                    
                    
                  </tr>
                      <?php
                        }
                 } else {
                   echo '<h5>Nenhum usuário encontrado</h5>';
                 }
                 ?>
                </tbody>
                <tbody>







    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>