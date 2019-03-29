<?php //inserirpaciente.php

include('conexao/conexao.php');

$paciente = $_POST['paciente'];
$cpf	  = $_POST['cpf'];
$tel	  = $_POST['tel'];


$sql 	  = "insert into tblpaciente(paciente,cpf,tel) values('$paciente','$cpf','$tel')";

$qry	  = mysqli_query($con, $sql);

if($sql){

	echo "<script>alert('Cadastro realizado com sucesso!');</script>";
	}
	
	header('location: cadpaciente.php');
	
	