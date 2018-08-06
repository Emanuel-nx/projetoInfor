
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

			<style type="text/css">
	      		.margin-button15 { margin-bottom: 15px; }
	    	</style> 

	</head>
	
	<body>

		<div class="container">
			
			<div class="row">
				<h1>Lista de Produtos</h1>

				 <a href="<?=base_url('produtos/add')?>" class="btn btn-success margin-button15 btn-center">Novo Produto</a>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">Produto</th>	
							<th class="text-center">Detalhe</th>	
							<th class="text-center">Preço a vista</th>	
							<th class="text-center">Preço a prazo</th>	
							<th class="text-center">Status</th>									
							<th class="text-center">Ações</th>							

						</tr>
					</thead>
					<?php
						$contador = 0;
						foreach ($produtos as $produto) 
						{
							echo '<tr>';
								echo '<td>'.$produto->descricao.'</td>';
								echo '<td class="text-center">'.$produto->detalhamento.'</td>';
								echo '<td class="text-center">'.'$ '.$produto->preco_vista.'</td>';	
								echo '<td class="text-center">'.'$ '.$produto->preco_prazo.'</td>';	
								echo '<td class="text-center">';

								//Verificamos o status do produto
							    if ($produto->status == 1) {
							       	//Se tiver == 1 está Ativo
							        echo '<span class="label label-success"><a href="http://localhost:8080/projetoinfor/produtos/status/'.$produto->id.'"title="Deixar Inativo">Ativo</a></span>';
							      	} else {
							        //Se tiver == 0 está INATIVO
							        echo '<span class="label label-warning"><a href="http://localhost:8080/projetoinfor/produtos/status/'.$produto->id.'"title="Deixar Ativo">Inativo</a></span>';
							    }  
							    echo '</td>';

							    echo '<td class="text-center">'; 
								echo '<a href="http://localhost:8080/projetoinfor/produtos/editar/'.$produto->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';

								echo '<a href="http://localhost:8080/projetoinfor/produtos/apagar/'.$produto->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';

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
