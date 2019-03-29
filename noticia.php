<?php  		//arquivo editarpaciente.php
	include('conexao/conexao.php');
	include('menu.php'); 

	$idcon	=	$_GET['idnoticia'];

	$sql = "select * from tblnoticias where idcon='$idnoticia'";  

	$qry = mysqli_query($con,$sql);
	$linha = mysqli_fetch_array($qry);
	?>
	 
<html>  <!--cadconsulta.php--> 
	<head>
		<title>---SISTEMA CONSULTA---</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<div class="container">
                    <div class="row">
                    	<h1><?php  echo "<b>{$titulo}</b>";?></h1>
                    	<h5><?php  echo "<b> {$subtitulo}</b>";?></h5>
                    	<img src="">
                    	<p><?php  echo "Número da consulta: {$texo}</b>";?></p>
                    </div>
						
                 
					</div>
				</div>
			</form>
		</div>		
	</body>
</html>