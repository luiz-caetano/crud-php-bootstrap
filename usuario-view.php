<?php 
require('conexao.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Visualizar Usuário
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                        <div class="card-body">

                            <?php
                                if (isset($_GET['id'])) {
                                    $usuario_id = mysqli_real_escape_string($conexao,$_GET['id']);
                                    $sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
                                    $query = mysqli_query($conexao, $sql);
                                } 
                                    if (mysqli_num_rows($query) > 0) {
                                     $usuario = mysqli_fetch_array($query);
                                    } 

                            ?>
                                <div class="mb-3">
                                    <label>Nome</label>
                                    <p class="form-control">
                                    <?=$usuario['nome'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                    <?=$usuario['email'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Data de Nascimento</label>
                                    <p class="form-control">
                                    <?=date('d/m/Y',strtotime($usuario['data_nascimento']));?>
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>