<?php
	session_start();
	include_once("conexao.php");
	$cadastros_usuarios = "select * from dados";
	if( isset($_POST['nomeBusca']) ) {
		$cadastros_usuarios = $cadastros_usuarios." where nome like '%".$_POST['nomeBusca']."%'";
	}
	$count_usuarios = mysqli_query($conn, "select CEILING((count(*)/5)) as quantidade FROM (".$cadastros_usuarios.") d");
	$pagina = 1;
	if( isset($_GET['pagina']) ) {
		$pagina = $_GET['pagina'];
		if ($pagina > 1) {
			$cadastros_usuarios = $cadastros_usuarios." limit ".($pagina*5-5).",5";
		} else {
			$cadastros_usuarios = $cadastros_usuarios." limit 5";
		}
	} else {
		$cadastros_usuarios = $cadastros_usuarios." limit 5";
	}
	$resultado_usuarios = mysqli_query($conn, $cadastros_usuarios);		
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>	
		<meta charset ="utf-8">
		<title>LISTA DE CADASTROS </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../style/tabela.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
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
		<div style="margin-top: 30px" class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default panel-table">
						<div class="panel-heading">
							<div class="row">
								<div class="col col-xs-6">
									<h3 class="panel-title">Desenvolvedores</h3>
									<form method="post">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" name="nomeBusca" class="form-control" placeholder="Busque por um nome" name="busca" required>
										</div>
										<br>
										<button type="submit" class="btn btn-primary btn-block">Buscar</button>
									</form>
								</div>
								<div class="col col-xs-6 text-right">
									<form>
										<a href="index.php" class="btn btn-sm btn-primary btn-create">Novo desenvolvedor</a>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-list">
								<thead>
									<tr>
										<th><em class="fa fa-cog"></em></th>
										<th class="hidden-xs">ID</th>
										<th>Nome</th>
										<th>CPF</th>
										<th>RG</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<?php	
									while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){?>
										<tr>
											<td align="center">
												<a class="btn btn-default" href="editar.php?id=<?php echo $row_usuario['id'] ?>"><em class="fa fa-pencil"></em></a>

												<a class="btn btn-danger" href="apagar.php?id=<?php echo $row_usuario['id'] ?>"><em class="fa fa-trash"></em></a>
											</td>
											<td class="hidden-xs"><?php echo $row_usuario['id'] ?></td>
											<td><?php echo $row_usuario['nome'] ?></td>
											<td><?php echo $row_usuario['cpf'] ?></td>
											<td><?php echo $row_usuario['rg'] ?></td>
											<td><?php echo $row_usuario['email'] ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
							<div class="panel-footer">
								<div class="row">
								<div class="col col-xs-4">Página <?php echo($pagina)?> de <?php
									$row_countusuario = mysqli_fetch_assoc($count_usuarios);
									echo($row_countusuario['quantidade']);
								?>
								</div>
								<div class="col col-xs-8">
									<ul class="pagination hidden-xs pull-right">
									<?php
										for ($i = 1; $i <= $row_countusuario['quantidade']; $i++) {?>
											<li><a href="?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
									<?php
									}
									?>
									</ul>
									<ul class="pagination visible-xs pull-right">
										<li><a href="#">«</a></li>
										<li><a href="#">»</a></li>
									</ul>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="copyright"></div>
	</body>
	<style>
		body {
			background-color:#1E90FF;
		}
	</style>
</html>