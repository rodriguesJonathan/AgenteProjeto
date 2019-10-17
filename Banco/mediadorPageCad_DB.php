<?php
include_once("conexao.php");
$nome    = $_POST['nome'];
$email   =  $_POST['email'];
$senha = $_POST['senha'];
$sus     = $_POST['sus'];
$cep     = $_POST['cep'];
$numero     = $_POST['numero'];
$endereco     = $_POST['endereco'];

$sql = "INSERT INTO usuario (nome,email,senha,sus,cep,numero,endereco) VALUES ('$nome','$email','$senha','$sus','$cep','$numero','$endereco')";


$linhasInseridas = mysql_affected_rows($conn);
if($linhasInseridas>0){
	echo"1"; 
      
}else{ 
	echo"0";
        
}



?>
