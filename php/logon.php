<?php
//recebendo os dados da tela de login

$email = $_POST['email'];
$password = $_POST['senha'];

//link da conexão
include 'conexao.php';

//Pagar os dados do banco

$sql = "SELECT * FROM tb_user WHERE email = '$email";

$query = $conexão->query($sql);

$resultado = $query->fetch_assoc();

print_r($resultado);


?>
