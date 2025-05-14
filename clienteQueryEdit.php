<?php 
require ('conexao.php');
require('cidadeDao.php');

if (isset($_POST['cliente_update'])) {
    $nome = $_POST['nome'];
    $cnpj_cpf = $_POST['cnpj_cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidadeSelect'];
}
    $sql = "UPDATE cliente,
    SET nome = '$nome', cnpj_cpf = '$cnpj_cpf', endereco = '$endereco', telefone = '$telefone', cidade = '$cidade';
    ";
    mysqli_query($conexao, $query);