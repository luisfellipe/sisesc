<!DOCTYPE html>
<html>
<head>
	<title>Aluno</title>
	
	<?php 
	include_once("../../include/head.php");
	?>
	<link rel="stylesheet" type="text/css" href="../../../css/tela.css">
</head>
<body>
	<?php 
		include_once("../../include/cabecalho.php");
		?>
	<div class="container">
		
		<div class="row">
			<div class="col-md-4">
				<aside id="menu" class="container bg-dark rounded">
					<br>
					<ul>
						<li class=" btn btn-primary">
						<a href="info-aluno.php">Infomações</a>
						</li>
						<br>
						<li class="btn btn-primary">
							<a href="#">Boletim</a>
						</li>
						<br>
						<li class="btn btn-primary">
							<a href="#">Calendário</a>
						</li>
						<br>
						<li class="btn btn-primary">
							<a href="#">Grade</a>
						</li>
						<br>
						<li class="btn btn-primary">
							<a href="#">Histórico</a>
						</li>
						<br>
					</ul>

				</aside>
			</div>
			<div class="col-md-8">
				
			</div>
		</div>	
	</div>
	<?php 
	include_once("../../include/rodape.php");

	include_once("../../include/js.php");
	?>
</body>
</html>