<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
<body>
    <?php include ('navbar.php');?>
    <div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
      <div class="p-3">
        <div class="card" style="width: 20rem;">
            <img src="https://semeupetfalasse.wordpress.com/wp-content/uploads/2018/10/cachorro-e-gato-adocao.jpg?w=660" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Área de Clientes</h5>
                <p class="card-text">Cadastrar, atualizar e deletar clientes.</p>
                <a href="clientes.php" class="btn btn-primary">Clientes</a>
            </div>
            </div>
    </div>
    </div>
    <div class="col">
      <div class="p-3">
            <div class="card" style="width: 20rem;">
            <img src="https://saladeimprensa.vale.com/documents/d/guest/conheca-animais-png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Área de Usúarios</h5>
                <p class="card-text">Cadastrar, atualizar e deletar usuários.</p>
                <a href="usuario.php" class="btn btn-primary">Usuários</a>
            </div>
            </div>
    </div>
    </div>
  </div>
</div>
</body>
</html>