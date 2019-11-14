<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Boletim Escolar</title>

	<!-- Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:title" content="Boletim Escolar" />
	<meta name="msapplication-TileColor" content="#ffffff" />


	
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Styles -->
    <style type="text/css">
        button > span.icone-tabela-visualizar {
            margin-right: 4px !important;
        }
    </style>

	            <style type="text/css">
		            .decor-nav-top, .decor-nav-row, .decor-nav-row-footer, .decor-header-see, .decor-container, .decor-body, .decor-footer-description {
			            max-width: none;
		            }
	            </style>
	<!-- Scripts -->
</head>
<body>
	
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="tit">Boletim Escolar</h1>
					<form action="" data-ajax="true" data-ajax-method="POST" data-ajax-success="Pesquisar" method="post">                    
						<div class="">
                        <div class="">
                            <fieldset class="">
                                <p>Acesse online os resultados de seu boletim escolar. Para realizar a consulta, o estudante deve informar o número de seu Registro do Aluno (RA) e sua data de nascimento.</p>

                                <div class="form-group">
                                    <label for="txtNrAnoLetivo">Ano Letivo:</label>
                                    <input type="number" class="form-control" id="txtNrAnoLetivo" name="nmNrAnoLetivo" maxlength="4" size="1" style="width: 80px !important" value="2019" />
                                </div>

                                <div class="form-group">
                                    <label for="txtNrRa">RA:</label>
                                    <div>
                                        <input type="text" class="form-control force-inline ra" id="txtNrRa" name="nmNrRa" maxlength="12" size="12" autocomplete="off" />
                                        -
                                        <input aria-label="Dígito do RA" type="text" class="form-control force-inline" id="txtNrDigRa" name="nmNrDigRa" maxlength="2" size="2" style="text-transform: uppercase;" />
                                        /
                                        <select aria-label="UF do RA" class="form-control force-inline" id="ddlUfRa" name="nmUfRa">
                                        	<option></option>
											<option value="AC">AC</option>
											<option value="AL">AL</option>
											<option value="AP">AP</option>
											<option value="AM">AM</option>
											<option value="BA">BA</option>
											<option value="CE">CE</option>
											<option value="DF">DF</option>
											<option value="ES">ES</option>
											<option value="GO">GO</option>
											<option value="MA">MA</option>
											<option value="MT">MT</option>
											<option value="MS">MS</option>
											<option value="MG">MG</option>
											<option value="PA">PA</option>
											<option value="PB">PB</option>
											<option value="PR">PR</option>
											<option value="PE">PE</option>
											<option value="PI">PI</option>
											<option value="RJ">RJ</option>
											<option value="RN">RN</option>
											<option value="RS">RS</option>
											<option value="RO">RO</option>
											<option value="RR">RR</option>
											<option value="SC">SC</option>
											<option value="SP">SP</option>
											<option value="SE">SE</option>
											</select>
                                    </div>
                                </div>

                                <div class="">
                                    <label for="txtDtNascimento">Data de Nascimento:</label>
                                    <div><input type="text" class="form-control data" id="txtDtNascimento" name="nmDtNascimento" maxlength="10" size="6" /></div>
                                </div>

                                <div class="form-group">
                                    <label for="CaptchaInputText">Digite o código na imagem:</label>
                                    <div>
                                        <div class="sed-captcha"><input autocomplete="off" class="form-control" data-val="true" data-val-required="Obrigatório" id="CaptchaInputText" maxlength="5" name="CaptchaInputText" size="6" style="text-transform: uppercase;" type="text" value="" />
									<img id="CaptchaImage" src="" style="display: block; margin-top: 8px" />
									<input id="CaptchaDeText" name="CaptchaDeText" type="hidden" value="" /></div>
                                    </div>
                                </div>

                                <div class="rodape-botao"><button type="submit" class="btn btn-info">
                                	<span class=""> </span>Pesquisar</button></div>
                            </fieldset>
                        </div>
                    </div>
				</form>         
			 </div>
        </div>
    </div>
 
</body>
</html>
