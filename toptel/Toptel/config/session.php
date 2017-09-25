<?php

if (!isset($_SESSION)) {
    session_start();
}
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../index.php');
}
$logado = $_SESSION['login'];
//$senha = $_SESSION['senha'];
