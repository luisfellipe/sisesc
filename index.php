<!DOCTYPE html>
<html>
<head>
	<title>Tela Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
</head>
<body>

	<div class="container">
		<div class="row" >
			<div class="col-md-12">
				<div class="w-100 mx-auto" id="tela_login">
					<div id="logo">
						<img class="img img-fluid" src="img/logo-sisesc.png">
					</div>
					<form id="login">
						<label for="usuario">Usuario:</label><br>
						<input type="text" name="usuario" class="form-control">

						<label for="senha">Senha:</label>
						<input type="password" name="senha" class="form-control">

						<input type="submit" name="acessar" value="Acessar" class="btn btn-dark">
						<div><a href="#">Esqueceu a senha?</a></div>
						<div><a href="#">Alterar senha!</a></div>

					</form>
				</div>
			</div>

			<?php
			if(isset($_POST['acessar'])){
			$con = mysqli_connect("localhost","root","");
			mysqli_select_db($con,"users");
			
			$user=$_POST['usuario'];
			$senha=$_POST['senha'];
			$sql="SELECT * FROM users WHERE usuario='$user' AND senha=$senha";

			$verifica = mysqli_query($con,$sql);

			if($verifica->num_rows = 1){
			header("Location:./paginas/paginainicial.html");
		}else{
		echo"<script language='javascript' type='text/javascript'>
			alert('Usuário e/ou senha incorreto(s)!');window.location
		.href='index.php (esta página)';</script>";
		die();
	}
	mysqli_close($con);	
}

?>
</div>
</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</body>
</html>