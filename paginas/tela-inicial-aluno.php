<!DOCTYPE html>
<html>
<head>
	<title>Tela do aluno</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/tela.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

</head>
<style type="text/css">
	body{
		margin: 0px;
	}
</style>
<body>	

	<nav class="navbar navbar-expand-lg navbar-light bg-dark-sublime mt-0">
		<div class="navbar-brand ml-2 mt-2">
			<a href="index.html">
				<img src="img/logo-sisesc.png" id="logo">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarmenu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item mr-2">
					<a class="nav-link text-white rounded h4" href="html/jogos.html">Jogos</a>
				</li> 
				<li class="nav-item mr-2">
					<a class="nav-link text-white rounded h4" href="html/aberturas.html">Trilha Sonora</a>
				</li> 
				<li class="nav-item  mr-2">
					<a class="nav-link text-white rounded h4" href="html/personagens.html">Personagens</a>
				</li>

			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown mr-4">
					<a class="nav-link dropdown-toggle text-white rounded h4" href="#" data-toggle="dropdown" id="poderes">Poderes</a>
					<div class="dropdown-menu" aria-labelledby="poderes">
						<a class="dropdown-item h4" href="html/ki.html">KI</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item h4" href="html/ataques.html">Ataques</a>

					</div>
				</li> 
				<li class="nav-item mr-4">
					<a class="nav-link text-white rounded h4" href="html/transformacoes.html">Transformações</a>
				</li> 
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header id="cabecalho" >
					<div>
						<img src="../img/logo-sisesc.png" width="250px" height="80px">
					</div>
				</header>
				<br>
				<ul>
					<li class="btn btn-dark w-50">
						<a class="text-white" href="info-aluno.html">Infomações</a>
					</li>
					<br><br>
					<li class="btn btn-dark w-50">
						<a class="text-white" href="boletim-escolar.html"> Boletim</a>
					</li>
					<br><br>
					<li class="btn btn-dark w-50">
						<a class="text-white" href="#"> Calendário</a>
					</li>
					<br><br>
					<li class="btn btn-dark w-50">
						<a class="text-white" href="#">Grade</a>
					</li>
					<br><br>
					<li class="btn btn-dark w-50">
						<a class="text-white" href="#">Histórico</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

		<script type="text/javascript" src="../js/script.js"></script>
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

