<!DOCTYPE html>
<html>
<head>
	<title>Tela do aluno</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/colorfont.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/tela.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../js/script.js"></script>

	 <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">

 	<script type="text/javascript" src="js/script.js"></script>


	<style type="text/css">
	
	div[id=logo]{
	width: 250px;
	height: 80px;
	}
	div[id=logo] img{
	width: 250px;
	height: 80px;
	}
	div[class="info"] legend{
		position: relative;
		margin-left: 50px;
	}
		
	</style>
</head>
<body>	
	<div class="container">
		<header id="cabecalho" class="navbar navbar-expand-sm bg-light">
			<div id="logo">
				<img src="../img/logo-sisesc.png">
			</div>
			<div class="container-fluid"> 
	  		<br>
	  		<nav class="navbar navbar-expand-sm   navbar-light">
	        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	          	<span class="navbar-toggler-icon"></span>
	        	</button>

	        	<div class="collapse navbar-collapse " id="navbarTogglerDemo03">
	          		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	            		<li class="nav-item  ">
	              			<a class="nav-link btn btn-secondary" href="#">Home <span class="sr-only">(current)</span></a>
	            		</li>
	            		<li class="nav-item">
	              			<a class="nav-link btn btn-secondary" href="#">Sobre</a>
	           			</li>
	            		<li class="nav-item dropdown dmenu">
	            			<a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="navbardrop" data-toggle="dropdown">Nossos Serviços </a>
	            			<div class="dropdown-menu sm-menu">
				              <a class="dropdown-item" href="#">service2</a>
				              <a class="dropdown-item" href="#">service 2</a>
				              <a class="dropdown-item" href="#">service 3</a>
				            </div>
				        </li>
	          			<li class="nav-item">
	            			<a class="nav-link btn btn-secondary" href="#">Contate-nos</a>
	          			<li>
			           <!-- <li class="nav-item dropdown dmenu">
			            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			              Dropdown link
			            </a>
			            <div class="dropdown-menu sm-menu">
			              <a class="dropdown-item" href="#">Link 1</a>
			              <a class="dropdown-item" href="#">Link 2</a>
			              <a class="dropdown-item" href="#">Link 3</a>
			              <a class="dropdown-item" href="#">Link 4</a>
			              <a class="dropdown-item" href="#">Link 5</a>
			              <a class="dropdown-item" href="#">Link 6</a>
			            </div>
			          </li> -->
	          		</ul>
		            <div class="social-part">
			            <i class="fa fa-facebook" aria-hidden="true"></i>
			            <i class="fa fa-twitter" aria-hidden="true"></i>
			            <i class="fa fa-instagram" aria-hidden="true"></i>
		            </div>
	        	</div>
	      	</nav>
  		</div>

		</header>
		<hr>
		<br>
		<div class="row">
			<div class="col-md-4">
				<aside id="menu" class="container bg-dark rounded">
					<br>
				<ul>
					<li class=" btn btn-primary">Infomações</li>
					<br>
					<li class="btn btn-primary">Boletim</li>
					<br>
					<li class="btn btn-primary">Calendário</li>
					<br>
					<li class="btn btn-primary">Grade</li>
					<br>
					<li class="btn btn-primary">Histórico</li>
					<br>
					<li class="btn btn-warning">Editar</li>
				</ul>

		</aside>
			</div>

			<div class="col-md-8">
				<article id="corpo" class="container">
					<fieldset>
						<legend><h2 class="text-primary">Informações Pessoais</h2></legend>
						<div  class="info">
							<label><h4>Nome:</h4> </label>
							<span id="nome-aluno"> informações do aluno</span> 
						</div>
						<br>
						<div  class="info">
							<label><h4>Idade:</h4></label>
							<span id="idade-aluno"> informações do aluno</span> 
						</div>
						<br>
						<div  class="info">
						<label><h4>Email:</h4></label>
							<span id="email-aluno"> informações do aluno</span> 
						</div>
						<br>
						<div  class="info">
							<label><h4>Telefone:</h4></label>
							<span id="telefone-aluno"> informações do aluno</span> 
						</div>
						<br>
						<div  class="info">
							<label ><h4>CPF:</h4> </label>
							<span id="cpf-aluno"> informações do aluno</span> 
						</div>
						<br>
						<div  class="info">
							<label ><h4>RG:</h4></label>
							<span id="rg-aluno"> informações do aluno</span> </div>
						<div  class="info">
							<label><h4>RA:</h4></label>
							<span id="ra-aluno"> informações do aluno</span> 
						</div>
					</fieldset>]
				</article>
			</div>
		</div>

		

		<footer id="rodape"  >
			<!-- Divisão-->		
			<div class="space3"></div>
			<hr>	

			<div class="container-fluid" id="rodape">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h3>Alguma coisa</h3>
						</div>
						<div class="col-sm-4">
							<h3>Alguma coisa</h3>
						</div>
						<div class="col-sm-4">
							<h3>Alguma coisa</h3>
						</div>
					</div>
				</div>
			</div>
		
		</footer>

	</div>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

