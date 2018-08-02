
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Lista de Produtos da tabela Produtos">

		<title>Lista Produtos</title>

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	</head>
	
	<body>

		<div class="container">
			
			<div class="row">
				<h1>Lista de Produtos</h1>
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">Produto</th>	
							<th class="text-center">Detalhe</th>	
							<th class="text-center">Preço a vista</th>							
						</tr>
					</thead>
					<?php
						$contador = 0;
						foreach ($produtos as $produto) 
						{
							echo '<tr>';
								echo '<td>'.$produto->descricao.'</td>';
								echo '<td class="text-center">'.$produto->detalhamento.'</td>';
								echo '<td class="text-center">'.$produto->preco_vista.'</td>';			
								echo '<td class="text-center">';
								echo '<a href="/produtos/editar/'.$produto->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
								echo '<a href="/produtos/apagar/'.$produto->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
								echo '<a href="/produtos/detalhes/'.$produto->id.'" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>';
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
