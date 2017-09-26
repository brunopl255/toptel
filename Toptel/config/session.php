<?php

if (!isset($_SESSION)) {
    session_start();
}
if ((!isset($_SESSION['cpf']) == true) and ( !isset($_SESSION['senhacryp']) == true)) {
    unset($_SESSION['cpf']);
    unset($_SESSION['senhacryp']);
    header('location:../index.php');
}
$logado = $_SESSION['cpf'];
$senha = $_SESSION['senha'];
