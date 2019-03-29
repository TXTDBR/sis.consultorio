<?php //inserirconsulta.php
include('conexao/conexao.php');

//Devemos pegar os dados da url atraves da variavel global $_POST ['nodocampoformulario']
$paciente = $_POST['paciente'];
$especial = $_POST['especial'];
$dtcon	  = $_POST['dtcon'];
$hora     = $_POST['hora'];
$unidade  = $_POST['unidade'];
$forma	  = $_POST['forma'];
$valor	  = $_POST['valor'];

// insert into tabelalogin (login, senha, dtcad, ativo) value ('$login', '$senha', '$dtcad', $ativo')";
$sql	  = "insert into tblconsultas(paciente,especial,dtcon,hora,unidade,forma,valor) values('$paciente','$especial','$dtcon','$hora','$unidade','$forma','$valor')";

if($sql){
	echo "<script>alert('Cadastro realizado com sucesso!');</script>";
	}
	
	header('location: cadconsulta.php');

//comando de execução da query

$qry 	  = mysqli_query($con, $sql);