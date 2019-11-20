<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- Required meta tags -->
	<?php
	include_once("php/include/head.php");
	?>


	<style type="text/css">
		.space{
			height: 1500px;

		}
		.space3{
			height: 8em;

		}
		a{
			color: white;
		}
	</style>
</head>
<body>
	<div class="container">

		<header id="cabecalho" class="navbar navbar-expand-sm bg-light">
			<div id="logo">
				<img src="img/logo-sisesc.png">
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
								<a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="navbardrop" data-toggle="dropdown">Serviços </a>
								<div class="dropdown-menu sm-menu">
									<a class="dropdown-item" href="#">service2</a>
									<a class="dropdown-item" href="#">service 2</a>
									<a class="dropdown-item" href="#">service 3</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link btn btn-secondary" href="#">Contate-nos</a>
							</li>

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

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="card w-100 text-white bg-primary mb-3">
						<h3 class="card-header"> Aluno</h3>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text"> </p>
							<a href="php/paginas/aluno/aluno.php" class="btn btn-secondary w-100">Visitar</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card w-100 text-white bg-primary mb-3">
						<h3 class="card-header"> Professor</h3>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text"> </p>
							<a href="php/paginas/funcionario/professor.php" class="btn btn-secondary w-100">Visitar</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card w-100 text-white bg-primary mb-3">
						<h3 class="card-header"> Dados</h3>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text">  </p>
							<a href="#" class="btn btn-secondary w-100">Visitar</a>
						</div>
					</div>
				</div>

			</div>


			<br>
			<div class="row">
				<div class="col-sm-4">
					<div class="card w-100 text-white bg-primary mb-3">
						<h3 class="card-header"> Documentos</h3>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text"> </p>
							<a href="#" class="btn btn-secondary w-100">Visitar</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card w-100 text-white bg-primary mb-3">
						<h3 class="card-header"> Calendário</h3>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text"> </p>
							<a href="#" class="btn btn-secondary w-100">Visitar</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card w-100 text-white bg-primary mb-3">
						<h3 class="card-header">Eventos</h3>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text">  </p>
							<a href="#" class="btn btn-secondary w-100">Visitar</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php
	include_once("php/include/rodape.php");
	?>
	<?php
	include_once("php/include/js.php");
	?>
</body>
</html>