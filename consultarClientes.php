<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no"> <meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"> <meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<!--<script src="js/funcoes.js"></script>-->
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Deseja apagar o registro?")) {
   				document.location = delUrl;
   				//var url_string = "http://localhost/agendamento-mysql/" + delUrl;
				//var url = new URL(url_string);
				//var data = url.searchParams.get("id"); //pega o value
	        }  
		}
	</script>
	<title>SISTEMA DE AGENDAMENTO - CLIENTES</title>
</head> 
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light bg-primary col-12">
				<a class="navbar-brand" href="#">SISTEMA WEB</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Cadastrar<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="consultarClientes.php">Consultar</a>
						</li>
					</ul>
				</div>
			</nav>  
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body" style="margin: auto;">
					<h5 class="card-title">Consultar - Contatos Agendados</h5>
					<table class="table table-responsive" style="width: auto;">
						<thead class="table-active bg-primary">
							<tr>
								<th scope="col">Email</th>
								<th scope="col">Endereco</th>
								<th scope="col">Senha</th>
								<th scope="col">Bairro</th>
								<th scope="col">CEP</th>
								<th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
							</tr>
						</thead>
						<tbody id="TableData">
						<?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar(0);
							//print_r($resultado);
							for($i=0;$i<count($resultado);$i++){ 
						?>
								<tr>
									<td scope="col"><?php echo $resultado[$i]['email']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['endereco']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['senha']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['bairro']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['cep']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['cidade']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['estado']; ?></td>
									<td scope="col">
										<button type="button" class="btn btn-outline-primary" style="width: 72px;">Editar</button>
										<button type="button" class="btn btn-outline-primary" style="width: 72px;">Excluir</button>
									</td>
								</tr>
						<?php
							}
						?>
						</tbody>
						<!--<tr>
							<td scope="row">Jeferson Roberto de Lima</td>
							<td>(11)97665-0099</td>
							<td>Google Meu Negócio</td>
							<td>25/05/2021</td>
							<td>Serviço agendado para 01/07/2021</td>
							<td>
								<button type="button" class="btn btn-outline-primary" style="width: 72px;">Editar</button>
								<button type="button" class="btn btn-outline-primary" style="width: 72px;">Excluir</button>
							</td>
						</tr>-->
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>