
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Lista de clientes da tabela clientes">

		<title>Lista Clientes</title>

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

			<style type="text/css">
	      		.margin-button15 { margin-bottom: 15px; }
	    	</style> 

	</head>
	
	<body>

		<div class="container">
			
			<div class="row">
				<h1>Lista de Clientes</h1>

				 <a href="<?=base_url('clientes/add')?>" class="btn btn-success margin-button15 btn-center">Novo Cliente</a>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">Cliente</th>	
							<th class="text-center">CPF</th>	
							<th class="text-center">Endereço</th>	
							<th class="text-center">Cidade</th>	
							<th class="text-center">Status</th>									
							<th class="text-center">Ações</th>							

						</tr>
					</thead>
					<?php
						$contador = 0;
						foreach ($clientes as $cliente) 
						{
							echo '<tr>';
								echo '<td>'.$cliente->nome.'</td>';
								echo '<td class="text-center">'.$cliente->cpf.'</td>';
								echo '<td class="text-center">'.$cliente->endereco.'</td>';	
								echo '<td class="text-center">'.$cliente->cidade.'</td>';	
								echo '<td class="text-center">';

								//Verificamos o status do cliente
							    if ($cliente->status == 1) {
							       	//Se tiver == 1 está Ativo
							        echo '<span class="label label-success"><a href="http://localhost:8080/projetoinfor/clientes/status/'.$cliente->id.'"title="Deixar Inativo">Ativo</a></span>';
							      	} else {
							        //Se tiver == 0 está INATIVO
							        echo '<span class="label label-warning"><a href="http://localhost:8080/projetoinfor/clientes/status/'.$cliente->id.'"title="Deixar Ativo">Inativo</a></span>';
							    }  
							    echo '</td>';

							    echo '<td class="text-center">'; 
								echo '<a href="http://localhost:8080/projetoinfor/clientes/editar/'.$cliente->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';

								echo '<a href="http://localhost:8080/projetoinfor/clientes/apagar/'.$cliente->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';

								echo '</td>';
							echo '</tr>'; 
						$contador++;
						}
					?>

				</table>

				<div class="row">
					<div class="col-md-12">
						Total de registro: <?php echo $contador ?>
					</div>
				</div>

			</div>
		
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
