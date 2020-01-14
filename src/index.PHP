<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset ="utf-8">
		<title>Cadastro de Dev's </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../style/formulario.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
		<script> 
			$(function(){
				$("#copyright").load("copyright.html"); 
				$("#cabecalho").load("cabecalho.html");
			});
		</script> 
	</head>
	<body>
		<div id="cabecalho"></div>
		<div class="col-md-5 col-md-offset-5" id="login" style="margin-top:2%">
			<section id="inner-wrapper" class="login">
			<hl class="display-1">Cadastro de Desenvolvedores</hl>
				<article>
					<form style="margin-bottom: 6px;" method="POST" action="processa.php" accept-charset="utf-8">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
								<input type="text" class="form-control" placeholder="Nome" name="nome" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
								<input type="text" class="form-control" placeholder="CPF" name="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
								<input type="text" class="form-control" placeholder="RG" name="rg" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
								<input type="email" class="form-control" placeholder="E-mail" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key"> </i></span>
								<input type="text" class="form-control" placeholder="Telefone" name="telefone" required onkeypress="$(this).mask('(00) 00000-0000');">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
								<input type="text" class="form-control" placeholder="Cidade" name="cidade" required>
							</div>
						</div>
						<button type="submit" class="btn btn-success btn-block">Finalizar cadastro</button>
					</form>
					<form>
						<button type="submit" formaction="lista.php" class="btn btn-success btn-block">Lista De Cadastros</button>
					</form>
				</article>
			</section>
			<div id="copyright"></div>
		</div>	
	</body> 
	<style>
		body {
			background-color:#1E90FF;
		}
	</style>	 
</html>
