<?php 

header('Content-Type: text/html; charset=UTF-8');
include ("../config/conexao.php");
include ("../config/session.php");

$cpf = $_POST['CPF'];
$nome = $_POST['NOME'];
$email = $_POST['EMAIL'];
$telefone = $_POST['TELEFONE'];
$senha = $_POST['SENHA'];


/*echo $cpf." - ";
echo $nome." - ";
echo $email." - ";
echo $telefone." - ";
echo $senha." - ";*/


    $senhaCryp = md5($senha);
    

    $sql_consulta = ("SELECT * FROM CLIENTE WHERE CPF = '$cpf';");
    $CONSULTA =  mysqli_query($strcon,$sql_consulta);

    if(mysqli_num_rows($CONSULTA)>0){
        echo 'Usuário já cadastrado.';
    } else{
    $sql = ("INSERT INTO `cliente` (`CPF`, `NOME`, `EMAIL`, `TELEFONE`, `SENHA`) VALUES ('$cpf', '$nome', '$email', '$telefone', '$senhaCryp');");
    //print_r($sql);
    $INSERT = mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
    }
 ?>