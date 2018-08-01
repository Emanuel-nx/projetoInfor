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

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	</head>
	
	<body>

		<div class="container">
			
			<div class="row">
				<h1>Lista de Produtos</h1>
					<?php
					echo '<prev>';
						print_r($data);
					echo '</prev>';
					?>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>