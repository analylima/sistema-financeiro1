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

$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];

if ($email == $email_banco && $password == $senha_banco) {
    session_start();
    $senssion['id'] = $resultado['id_usuario'];
    header('location: ../tela_inicial.php');
}else{
    echo "<script> alert('Usuario ou senha Invalida'); history.back(); </script>";
}


?>
