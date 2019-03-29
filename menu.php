<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                     });
                 });
            });
        </script>
        
    </head> 
    <body>
       
            <h1 class="text-center topo">Sistema da Clínica
                <img src="img/1.png" class="mx-auto d-block">
            </h1>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#down"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="down">
                    <ul class="navbar-nav lead">
                        <li class="nav-item ">
                            <a class="nav-link" href="cadconsulta.php">Cadastrar Consulta</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="cadpaciente.php">Cadastrar Paciente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadmedico.php">Cadastrar Médico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadespecial.php">Cadastrar Especialidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pesquisarconsulta.php">Pesquisar Consulta</a>
                        </li>
                    </ul>	
                </div>				
            </nav>
      
    </body>
</html>