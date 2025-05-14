<?php
session_start();
require ('conexao.php');
require ('cidadeDao.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Editar Cliente
                <a href="index.php" class="btn btn-danger float-end">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <?php
              if (isset($_GET['id'])) {
                $cliente_id = mysqli_real_escape_string($conexao, $_GET['id']);
                $sql = "SELECT * FROM cliente WHERE id='$cliente_id'";
                $query = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($query) > 0) {
                  $usuario = mysqli_fetch_array($query);
              ?>
              <form action="clienteQueryEdit.php" method="POST">
                <input type="hidden" name="usuario_id" value="<?=$cliente['id']?>">
                <div class="mb-3">
                  <label>Nome</label>
                  <input type="text" name="nome" value="<?=$cliente['nome']?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>CNPJ_CPF</label>
                  <input type="text" name="email" value="<?=$cliente['cnpj_cpf']?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Endereço</label>
                  <input type="text" name="endereco" value="<?=$cliente['endereco']?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Telefone</label>
                  <input type="text" name="telefone" value="<?=$cliente['telefone']?>" class="form-control">
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
                <div class="mb-3">
                  <button type="submit" name="cliente_update" class="btn btn-primary">Salvar</button>
                </div>
              </form>
              <?php
              } else {
                echo "<h5>Cliente não encontrado</h5>";
              }
            }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


