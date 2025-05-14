<?php 
session_start();
require ('conexao.php');
require('cidadeDao.php');


if(isset($_POST['criar-cliente'])) {
    $nome = $_POST['nome'];
    $cnpj_cpf = $_POST['cnpj_cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidadeSelect'];
}

    $sql = "INSERT INTO cliente (nome, cnpj_cpf, endereco, cidade_id, telefone) VALUES ('$nome', '$cnpj_cpf', '$endereco', '$cidade', '$telefone')";
    mysqli_query($conexao,$sql);
?>
