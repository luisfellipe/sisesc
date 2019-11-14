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
					<legend>Desvincular aluno</legend>
					<p>
						<label for="txtnome">RA ou CPF:</label> <br/>
						<input class="form-control" type="text" name="dado" id="txtbusca" size="27" maxlength="15" placeholder="Digite seu nome"/>
					</p>
					
					<input type="submit" name="remover" value="Desvincular" />
				</fieldset>
			</form>
			
			<?php
				if(isset($_POST['remover'])){			
				$dado=$_POST['dado'];
				
				$sql = "SELECT * FROM alunos WHERE cpf='$dado' OR ra='$dado'";
				$result = mysqli_query($conn, $sql);
				$sql = "DELETE FROM alunos WHERE cpf='$dado' OR ra='$dado'";

				if (mysqli_num_rows($result) > 0) {
				
					$linha = mysqli_fetch_assoc($result);
					$nome=$linha["nome"];
					$idade=$linha["idade"];
					$email=$linha["email"];
					$telefone=$linha["telefone"];
					$cpf=$linha["cpf"];
					$rg=$linha["rg"];
					$ra=$linha["ra"];
					
					echo "Os seguintes dados do aluno foram removidos: 
					Nome: $nome<br/>Idade: $idade<br/>E-mail: $email<br/>Telefone: $telefone<br/>
					CPF: $cpf<br/>RG: $rg<br/>RA: $ra<br/>";
					
				} else {
					echo "Email não cadastrado";
				}
			}
			?>
	</body>
</html>