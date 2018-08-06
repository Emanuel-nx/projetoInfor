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
			$dados['status'] = $this->input->post('status');		
			
			//Verifica se foi passado via POST a id dos produtos
			if ($this->input->post('id') != NULL) {		
				//Se foi passado ele vai fazer atualização no registro.	
				$this->produtos->editarProduto($dados, $this->input->post('id'));
			} else {
				//Se Não foi passado id ele adiciona um novo registro
				$this->produtos->addProduto($dados);
			}		
			redirect("");	
		}		
	}

	public function editar($id=NULL)	
	{						
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($id == NULL) {
			redirect('');
		}

			//Carrega o Model Produtos				
			$this->load->model('produtos_model', 'produtos');

			//Faz a consulta no banco de dados pra verificar se existe
			$query = $this->produtos->getProdutoByID($id);

		//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
		if($query == NULL) {
			redirect('');
		}
			//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;
			$dados['produto'] = $query;
			
			//Carrega a View
			$this->load->view('editarprodutos', $dados);		
	}

	//Função Apagar registro
	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($id == NULL) {
			redirect('');
		}

		//Carrega o Model Produtos				
		$this->load->model('produtos_model', 'produtos');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->produtos->getProdutoByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarProdutos do produtos_model
			$this->produtos->apagarProduto($query->id);
			redirect('');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			redirect('');
		}	
	}
	public function status($id=NULL)
	{

		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($id == NULL) {
			redirect('');
		}

		//Carrega o Model Produtos				
		$this->load->model('produtos_model', 'produtos');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->produtos->getProdutoByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Verifica se o produtos está ativo ou inativo para poder mudar o status do mesmo.
			if ($query->status == 1) {
				$dados['status'] = 0;
			} else {
				$dados['status'] = 1;
			}

			//Executa a função do produtos_model statusProduto
			$this->produtos->statusProduto($dados, $query->id);
			redirect('');


		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			redirect('');
		}

	}

		
}

