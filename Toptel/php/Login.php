<?php

session_star();
include ("../config/conexao.php");


$cpf = $_POST['CPF'];
$senha = $_POST['SENHA'];

$SENHACRYP = MD5($senha);

$sql_cliente = ("SELECT * FROM CLIENTE WHERE CPF = '$CPF' AND SENHA = '$SENHACRYP';");
$CONSULTA_CLIENTE = mysqli_query($strcon, $sql_cliente);

$sql_adm = ("SELECT * FROM ADMINISTRADOR WHERE CPF = '$CPF' AND SENHA = '$SENHACRYP';");
$CONSULTA_ADM = mysqli_query($strcon, $sql_adm);


if (mysqli_num_rows($CONSULTA_CLIENTE) >0){

    $_SESSION['cpf'] = $cpf;
    $_SESSION['senhacryp'] = $SENHACRYP;
    $_SESSION['senha'] = $SENHA;
    header('location:');  //ADICIONAR CAMINHO DEPOIS

} elseif (mysqli_num_rows($CONSULTA_ADM) >0) {
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senhacryp'] = $SENHACRYP;
    $_SESSION['senha'] = $SENHA;
    header('location:');

} else{
    
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    unset($_SESSION['senhacryp']);
    header('location: ../index.php');
}

