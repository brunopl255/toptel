<?php

session_start();
include ("../config/conexao.php");


$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$senhacryp = MD5($senha);

$sql_cliente = ("SELECT * FROM CLIENTE WHERE cpf = '$cpf' AND senha = '$senhacryp';");
$consulta_cliente = mysqli_query($strcon, $sql_cliente);

$sql_adm = ("SELECT * FROM ADMINISTRADOR WHERE cpf = '$cpf' AND senha = '$senhacryp';");
$consulta_adm = mysqli_query($strcon, $sql_adm);


if (mysqli_num_rows($consulta_cliente) >0){
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senhacryp'] = $senhacryp;
    $_SESSION['senha'] = $senha;
    header('location:../Pages/efetuar_reserva.php'); 

} elseif (mysqli_num_rows($consulta_adm) >0){
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senhacryp'] = $senhacryp;
    $_SESSION['senha'] = $senha;
    header('location:');

} else{
    
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    unset($_SESSION['senhacryp']);
    header('location: ../index.php');
}

