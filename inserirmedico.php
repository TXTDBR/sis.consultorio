<?php //inserirmedico.php
include('conexao/conexao.php');

//Devemos pegar os dados da url atraves da variavel global $_POST ['nodocampoformulario']
$medico   = $_POST['medico'];
$especial = $_POST['especial'];

$sql	  = "insert into tblmedicos(medico,especial) values('$medico','$especial')";

$qry 	  = mysqli_query($con, $sql);

if($sql){
	echo "<script>alert('Cadastro realizado com sucesso!');</script>";
	}
	
	header('location: cadmedico.php');