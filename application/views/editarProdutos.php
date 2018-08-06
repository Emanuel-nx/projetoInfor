<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Lista de produtos da tabela produtos">
    <meta name="author" content="blog.ismweb.com.br">
    
    <title>Novo cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->       
  </head>

  <body> 

    <div class="container">

      <div class="row">
                
        <h1>Atualizar produto</h1>   
        <ol class="breadcrumb">
              <li><a href="<?=base_url('produtos')?>">Inicio</a></li>          
              <li class="active">Atualizar produto</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="salvar" name="form_add" data-toggle="validator"method="post">
          
          <!-- Input text nome do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Nome</label>*
              <input type="text" name="descricao" value="<?php echo $produto->descricao ?>" class="form-control" placeholder="Campo Obrigatorio!" required>
            </div>
          </div> <!-- fim input text nome produtos -->

          <!-- Input text detalhamento -->
          <div class="row">
            <div class="col-md-8">
              <label>Detalhes</label>
              <input type="text" name="detalhamento" value="<?php echo $produto->detalhamento ?>" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->


          <!-- Input text preço do produtos -->
          <div class="row">
	            <div class="col-md-2">
	              <label>Preço a vista</label>
	              <input type="text" name="preco_vista" value="<?php echo $produto->preco_vista ?>" class="form-control" placeholder="R$ ">
	            </div>
	          
		           <!-- Input text preço do produtos -->
		  <div class="row">
		      	<div class="col-md-2">
		            <label>Preço a prazo</label>
		             <input type="text" name="preco_prazo" value="<?php echo $produto->preco_prazo ?>" class="form-control" placeholder="R$ ">
		        </div>

          <!-- Select produtos ativo ou inativo -->
          <div class="row">
            <div class="col-md-2">
              <label>Ativo</label>
              <select name="status" class="form-control">
                <option value="1"<?php echo ($produto->status == 1 ? 'selected="selected"' : '') ?> >Sim</option>
                <option value="0"<?php echo ($produto->status == 0 ? 'selected="selected"' : '') ?> >Não</option>
              </select>
            </div>
          </div><!-- fim select produtos ativo ou inativo -->
          </div><!-- fim input text preco produtos -->
          </div><!-- fim input text preco produtos -->


          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
            	<input type="hidden" name="id" value="<?php echo $produto->id ?>">
            	<button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
          </div><!-- fim do button submit(enviar) formulário -->
          

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>  
    <script src="<?=base_url()?>assets/js/validator.min.js"></script>  
  </body>
</html>