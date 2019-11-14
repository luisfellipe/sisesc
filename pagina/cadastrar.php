<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>SISESC</title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>	
		
		
		
		<div>
			<form id="Cadastro" action=<?php echo$_SERVER['PHP_SELF']; ?> method="post">
			<br/>
				<fieldset class="form-group">
					<legend> Cadastrar aluno </legend>
					<p>
						<label for="txtnome">Nome do Aluno:</label> <br/>
						<input class="form-control" type="text" name="nome" id="txtnome" size="27" maxlength="15" placeholder="Digite seu nome"/>
					</p>
					<p>
						<label for="txtnome">Idade:</label> <br/>
						<input class="form-control" type="text" name="idade" id="txtidade" size="27" maxlength="15" placeholder="Digite seu nome"/>
					</p>
					<p>
						<label for="txtemail">E-mail:</label> <br/>
						<input class="form-control" type="text" name="email" id="txtemail" size="27" maxlength="26" placeholder="Digite seu nome"/>
					</p>
					<p>
						<label for="txtnome">Telefone:</label> <br/>
						<input class="form-control" type="text" name="telefone" id="txttel" size="27" maxlength="15" placeholder="Digite seu nome"/>
					</p>
					<p>
						<label for="txtnome">CPF:</label> <br/>
						<input class="form-control" type="text" name="cpf" id="txtcpf" size="27" maxlength="15" placeholder="Digite seu nome"/>
					</p>
					<p>
						<label for="txtnome">RG:</label> <br/>
						<input class="form-control" type="text" name="rg" id="txtrg" size="27" maxlength="15" placeholder="Digite seu nome"/>
					</p>
					<p>
						<label for="txtsenha">RA:</label><br/>
						<input class="form-control" type="text" name="ra" id="txtra" size="27" maxlength="16" placeholder="Digite sua senha"/>
					</p>
					
					<input class="btn btn-primary" type="submit" name="cadastrar" value="Cadastrar" />
					<input class="btn btn-secondary" type="reset" value="Limpar"/>
				</fieldset>
				
			</form>
			
			<?php
				if(isset($_POST['cadastrar'])){
					$con = mysqli_connect("localhost","root","");
					mysqli_select_db($con,"alunos");
					
					$nome=$_POST['nome'];
					$idade=$_POST['idade'];
					$email=$_POST['email'];
					$telefone=$_POST['telefone'];
					$cpf=$_POST['cpf'];
					$rg=$_POST['rg'];
					$ra=$_POST['ra'];
					
					$sql="SELECT * FROM alunos WHERE ra='$ra' OR cpf='$cpf'";
					
					$result = mysqli_query($con,$sql);
						if($result->num_rows > 0){
							echo"<script language='javascript' type='text/javascript'>
							alert('RA e/ou CPF já foi cadastrado.');window.location
							.href='index.php';</script>";
							die();
						}else{
							$query = "INSERT INTO alunos (nome,idade,email,telefone,cpf,rg,ra,cod) VALUES ('$nome','$idade','$email','$telefone','$cpf','$rg','$ra',null)";
							$insert = mysqli_query($con,$query);
							
							if($insert){
							  echo"<script language='javascript' type='text/javascript'>
							  alert('Aluno cadastrado com sucesso!');window.location.
							  href='index.php'</script>";
							}else{
							  echo"<script language='javascript' type='text/javascript'>
							  alert('Não foi possível cadastrar esse aluno, erro no banco de dados.');window.location
							  .href='index.php'</script>";
							}
						}
					mysqli_close($con);	
				}
			?>
	</body>
</html>