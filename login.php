<!DOCTYPE html>
<html lang="">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 		<link rel="stylesheet" type="text/css" href="css/estilo.css">
 		<style>
 			body {
 				background-color:#87CEFA;
 			}
 			.formulário {
 					background-color: #fff;
			 		max-width: 420px !important;
			 		margin: auto;
			 		padding: 10px;
			 		height: 300px;
 		</style>
	</head>
	<body>
		<div class="container-fluid">
			<h1 class="text-center topo">Sistema da Clínica
			<img src="img/1.png" class="mx-auto d-block"></h1>
			<br>
			<div class="container">
			  <h2 class="text-center text-light"><b>Login do Sistema</b></h2>
				<form action="cadconsulta.php" class="formulário">
		    		<div class="form-group">
			      		<label for="email" class="lead">E-mail do Sistema:</label>
			      		<input type="email" class="form-control lead" placeholder="Digite o e-mail do sistema" name="email" required="">
		    		</div>
				    <div class="form-group">
				    	<label for="pwd" class="lead">Senha:</label>
				    	<input type="password" class="form-control lead" placeholder="Digite a senha do sistema" name="senha" required="">
				    </div>
		    		<div class="form-group form-check">
		    			<label class="form-check-label">
		        		<input class="form-check-input" type="checkbox" name="remember">Lembre-me
		      			</label>
		    		</div>
		    		<button type="submit" class="btn btn-primary btn-block">Entrar</button>
		 		</form>
			</div>
	</body>
</html>