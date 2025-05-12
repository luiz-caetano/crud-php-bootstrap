<?php 
session_start();
require ('conexao.php');


if(isset($_POST['criar-cliente'])) {
    $nome = mysqli_esacpe_string($conexao, trim($_POST['nome']));
    $cnpj_cpf = mysqli_escape_string($conexao, trim($_POST['cnpj_cpf']));
    $endereco = mysqli_escape_string($conexao, trim($_POST['endereco']));
    $telefone = mysqli_escape_string($conexao, trim($_POST['telefone']));

}
?>