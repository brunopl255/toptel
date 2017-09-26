<?php

header('Content-Type: text/html; charset=UTF-8');
include ("../config/conexao.php");
include ("../config/session.php");

$cpf = $_SESSION['cpf'];
$numeroQuarto = $_POST['numeroQuarto'];
$dataInicio = $_POST['dataInicio'];
$dataFim = $_POST['dataFim'];



	$sql = ("INSERT INTO `reserva` (`CPF`, `NumeroQuarto`, `DataDeEntrada`, `DataDeSaida`) VALUES ('$cpf', '$numeroQuarto', '$dataInicio', '$dataFim')");
	$INSERT = mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar reserva");

	//print_r($sql);