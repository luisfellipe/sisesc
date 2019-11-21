<!DOCTYPE html>
<html>
<head>
	<title>Tela do aluno</title>
	<?php 
	include_once("../../include/head.php");
	?>
	<link rel="stylesheet" type="text/css" href="/prototype/css/tela.css">


	<style type="text/css">

		div[id=logo]{
			width: 250px;
			height: 80px;
		}
		div[id=logo] img{
			width: 250px;
			height: 80px;
		}
		
		input{
			border: none;
		}

		div[id="form-area"]{
			border-left: 1px solid rgba(0, 0, 0, 0.2);
		}
		
		div[id="form-area"] form{
			margin-left: 1em;
		}
		/*label das informações do aluno*/
		div[id="form-area"]  label{
			font-size:16pt;
			color: rgba(0, 0, 0, 0.5)
		}
		/*dados do aluno*/
		div[id="form-area"]  span{
			font-size:14pt;
			margin-left: 0.5em;
		}
		
	</style>
</head>
<body>
	
	<?php 
	include_once("../../include/cabecalho.php");
	?>	

	<?php
	$login = $_POST['username'];

	$sql = "SELECT nome,idade,email,telefone,cpf,rg,ra FROM alunos WHERE cpf='$dado' OR ra='$dado'";

	$nome = "Nome do Aluno";
	$idade = "25";
	$email ="email@aluno.com";
	$telefone = "(XX) X XXXX-XXXX";
	$cpf = "XXX.XXX.XX-XX";
	$rg = "XXX.XXX.XX";
	$ra ="XXXXXXXXXXXX";
	?>

	<div class="container">
		
		<div class="row">
			<div class=" col-md-4 float-left" id="space-left">
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
						<li>
							<input class="btn btn-warning w-100" type="button" name="editar" value="Editar" onclick="editar('form-area'):" />
						</li>
					</ul>

				</aside>
			</div>

			<div class="col-md-8 float-left" id="form-area">
				<form >
					<fieldset>
						<h2 class="text-primary">Informações do Aluno</h2>
						<hr>
						<label>Nome:</label>
						<span><?php echo $nome ?></span>
						<br>
						<label>Idade:</label>
						<span><?php echo $idade." anos" ?></span>
						<br>
						<label>Email:</label>
						<span><?php echo $email ?></span>
						<br>
						<label>Telefone:</label>
						<span><?php echo $telefone ?></span> 
						<br>
						<label >CPF:</label>
						<span><?php echo $cpf ?></span>
						<br>
						<label >RG:</label>
						<span><?php echo $rg ?></span> 
						<br>
						<label>RA:</label>
						<span><?php echo $ra ?></span>
						
					</fieldset>
				</form>
			</div>
		</div>
	</div>

	<?php 
	include_once("../../include/rodape.php");

	include_once("../../include/js.php");
	?>

</body>
</html>

