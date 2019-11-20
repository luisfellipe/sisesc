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
		div[class="info"] legend{
			position: relative;
			margin-left: 50px;
		}
		div[id="form-area"]{
			margin-left: 8em;
		}
		input{
			border: none;
		}

		input[name=nome]{
			margin-left: 2.2em;
		}
		input[name=idade]{
			margin-left: 2.5em;
		}
		input[name=email]{
			margin-left: 2.5em;
		}
		input[name=telefone]{
			margin-left: 0.6em;
		}
		input[name=cpf]{
			margin-left: 3.3em;
		}
		input[name=rg]{
			margin-left: 4.1em;
		}
		input[name=ra]{
			margin-left: 4.2em;
		}
		
	</style>
</head>
<body>
	
	<?php 
	include_once("../../include/cabecalho.php");
	?>	
	<div class="container">
		
		<div >
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
					<li class="btn btn-warning">Editar
					</li>
				</ul>

			</aside>
		</div>
		<?php
		$login = $_POST['username'];

		$sql = "SELECT nome,idade,email,telefone,cpf,rg,ra FROM alunos WHERE cpf='$dado' OR ra='$dado'";
		$nome = "Luís Felipe Alves Soares";
		$idade = "25 anos";
		$email ="felipealvesoares@gmail.com";
		$telefone = "(35) 9 9756-7897";
		$cpf = "131254631";
		$rg = "54465446";
		$ra ="46454662";
		?>
		<div class="float-left" id="form-area">
			<form class="" action="">
				<fieldset>
					<h2 class="text-primary">Informações Pessoais</h2>
					<hr>
					<div  class="form-group info">
						<label><h4>Nome:</h4> </label>
						<input class="rounded" type="text" name="nome" size="45" placeholder="<?php echo $nome ?>">
					</div>
					
					<div  class="form-group info">
						<label><h4>Idade:</h4></label>
						<input type="text" name="idade" size="4" placeholder="<?php echo $idade ?>"> 
					</div>
					
					<div  class="form-group info">
						<label><h4>Email:</h4></label>
						<input type="email" name="email" size="45"> 
					</div>
					
					<div  class="form-group info">
						<label><h4>Telefone:</h4></label>
						<input type="text" name="telefone" size="15">  
					</div>

					<div  class="form-group info">
						<label ><h4>CPF:</h4> </label>
						<input type="text" name="cpf" size="15">  
					</div>

					<div  class="form-group info">
						<label ><h4>RG:</h4></label>
						<input type="text" name="rg" size="15">  
					</div>

					<div  class="form-group info">
						<label><h4>RA:</h4></label>
						<input type="text" name="ra" size="15">  
					</div>
				</fieldset>
			</form>
		</div>
	</div>

	<?php 
	include_once("./../include/rodape.php");

	include_once("./../include/js.php");
	?>

</body>
</html>

