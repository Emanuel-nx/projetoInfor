<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{	
		//CARREGA O MODEL
		$this->load->model('Produtos_model', 'produtos');

		//PEGA DADOS DO MODEL
		$data['produtos'] = $this->produtos->getProdutos();
		
		$this->load->view('listarprodutos',$data);
	}

	//Página de adicionar produto
	public function add()
	{	
		//Carrega o Model Produtos				
		$this->load->model('Produtos_model', 'produtos');					
		//Carrega a View
		$this->load->view('addProdutos');
	}
	//Função salvar no DB
	public function salvar()
	{
		//Verifica se foi passado o campo nome vazio.
		if ($this->input->post('descricao') == NULL) {

			echo "<p class='alert alert-success'>Preencha o campo DESCRIÇÃO!</p>";
			echo '<a href="add" title="voltar" class="btn btn-primary">Voltar</a>';
		} else {
			//Carrega o Model Produtos				
			$this->load->model('produtos_model', 'produtos');
			//Pega dados do post e guarda na array $dados
			$dados['descricao'] = $this->input->post('descricao');
			$dados['detalhamento'] = $this->input->post('detalhamento');
			$dados['preco_vista'] = $this->input->post('preco_vista');
			$dados['preco_prazo'] = $this->input->post('preco_prazo');		
			
			//Executa a função do produtos_model adicionar
			$this->produtos->addProduto($dados);
			//Fazemos um redicionamento para a página 		
			redirect("");	
		}		
	}
		
}

