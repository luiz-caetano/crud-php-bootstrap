<?php require ('conexao.php'); 
require('cidadeDao.php');

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
    <?php include ('navbar.php'); ?>
   <div class="container mt-5">
<div class="row">
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Cadastrar Clientes
                    <a href="clientes.php" class="btn btn-danger float-end">Voltar</a>
                </h4>
                <div class="card-body">
                    <form action="clienteQuery.php" method="POST">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>CNPJ-CPF</label>
                            <input type="text" name="cnpj_cpf" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <input type="text" name="telefone" class="form-control">
                        </div>
                                <?php
                                try {
                                    $cidadeObj = new CidadeDao();
                                    echo "<div class='col-md-2'>";
                                    echo "<div class='mb-3'>";
                                    echo "<label>Cidade</label>";
                                    echo $cidadeObj->getListCidade($conexao);
                                    echo '</div>';
                                    echo '</div>';
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="criar-cliente" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
