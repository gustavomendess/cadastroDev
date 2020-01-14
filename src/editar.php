<?php
	session_start();
	include_once("conexao.php");
	$id = $_GET["id"];
	$resulta_usuario = "select * from dados where id = '$id'";
	echo($resulta_usuario);
	$resultado_usuario = mysqli_query($conn, $resulta_usuario);
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset ="utf-8">
		<title>Edição de cadastros</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../style/formulario.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
				<hl class="display-1">Edição de Desenvolvedores</hl>
				<article>
					<form method="POST" style="margin-bottom: 6px;" action="proc_editar.php" accept-charset="utf-8">		
						<input type="hidden" class="form-control" name="id" value= "<?php echo $row_usuario['id'] ?>">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
								<input type="text" class="form-control" placeholder="Nome" value= "<?php echo $row_usuario['nome'] ?>" name="nome" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
								<input type="text" class="form-control" placeholder="CPF" value= "<?php echo $row_usuario['cpf']?>" name="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
								<input type="text" class="form-control" placeholder="RG"  value= "<?php echo $row_usuario['rg']?>" name="rg" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
								<input type="email" class="form-control" value= "<?php echo $row_usuario['email']?>" placeholder="E-mail" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key"> </i></span>
								<input type="text" class="form-control"  value= "<?php echo $row_usuario['telefone']?>" placeholder="Telefone" name="telefone" onkeypress="$(this).mask('(00) 00000-0000');" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
								<input type="text" class="form-control"  value= "<?php echo $row_usuario['cidade']?>" placeholder="Cidade" name="cidade" required>
							</div>
						</div>
						<button type="submit" class="btn btn-success btn-block">Finalizar edição</button>
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
