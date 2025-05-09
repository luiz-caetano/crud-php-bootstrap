<?php
define('HOST', '127.0.0.1');
define('USUAIRO', 'root');
define('SENHA', 'casa4101');
define('DB', 'crudphp');
$conexao = mysqli_connect(HOST, USUAIRO, SENHA, DB) or die('Não foi possível conectar')


?>