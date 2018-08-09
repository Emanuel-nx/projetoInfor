<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index()
	{	
		//CARREGA O MODEL
		$this->load->model('Clientes_model', 'clientes');

		//PEGA DADOS DO MODEL
		$data['clientes'] = $this->clientes->getClientes();
		
		$this->load->view('listarclientes',$data);
	}

	//Página de adicionar produto
	public function add()
	{	
		//Carrega o Model clientes				
		$this->load->model('Clientes_model', 'clientes');					
		//Carrega a View
		$this->load->view('addclientes');
	}
	//Função salvar no DB
	public function salvar()
	{

		//Verifica se foi passado o campo nome vazio.
		if ($this->input->post('nome') == NULL) {

			echo "<p class='alert alert-success'>Preencha o campo DESCRIÇÃO!</p>";
			echo '<a href="add" title="voltar" class="btn btn-primary">Voltar</a>';
		} else {
			//Carrega o Model clientes				
			$this->load->model('Clientes_model', 'clientes');
			//Pega dados do post e guarda na array $dados
			$dados['nome'] = $this->input->post('nome');
			$dados['cpf'] = $this->input->post('cpf');
			$dados['rg'] = $this->input->post('rg');
			$dados['endereco'] = $this->input->post('endereco');		
			$dados['numero'] = $this->input->post('numero');		
			$dados['estado'] = $this->input->post('estado');		
			$dados['cidade'] = $this->input->post('cidade');		
			$dados['renda'] = $this->input->post('renda');		
			$dados['usuario_id'] = $this->input->post('usuario_id');		
			$dados['created'] = $this->input->post('created');
			$dados['status'] = $this->input->post('status');		
			
			//Verifica se foi passado via POST a id dos clientes
			if ($this->input->post('id') != NULL) {	
				//Se foi passado ele vai fazer atualização no registro.	
				$this->clientes->editarClientes($dados, $this->input->post('id'));
			} else {
				//Se Não foi passado id ele adiciona um novo registro
				$this->clientes->addClientes($dados);
			}		
			redirect('clientes');	
		}		
	}

	public function editar($id=NULL)	
	{						
		//Verifica se foi passado um ID, se não vai para a página listar clientes
		if($id == NULL) {
			redirect('clientes');
		}

			//Carrega o Model clientes				
			$this->load->model('Clientes_model', 'clientes');

			//Faz a consulta no banco de dados pra verificar se existe
			$query = $this->clientes->getClientesByID($id);

		//Verifica que a consulta voltar um registro, se não vai para a página listar clientes
		if($query == NULL) {
			redirect('clientes');
		}
			//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;
			$dados['clientes'] = $query;
			
			//Carrega a View
			$this->load->view('editarclientes', $dados);		
	}

	//Função Apagar registro
	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar clientes
		if($id == NULL) {
			redirect('clientes');
		}

		//Carrega o Model clientes				
		$this->load->model('Clientes_model', 'clientes');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->clientes->getClientesByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarclientes do Clientes_model
			$this->clientes->apagarClientes($query->id);
			redirect('clientes');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar clientes
			redirect('clientes');
		}	
	}
	public function status($id=NULL)
	{

		//Verifica se foi passado um ID, se não vai para a página listar clientes
		if($id == NULL) {
			redirect('clientes');
		}

		//Carrega o Model clientes				
		$this->load->model('Clientes_model', 'clientes');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->clientes->getClientesByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Verifica se o clientes está ativo ou inativo para poder mudar o status do mesmo.
			if ($query->status == 1) {
				$dados['status'] = 0;
			} else {
				$dados['status'] = 1;
			}

			//Executa a função do Clientes_model statusProduto
			$this->clientes->statusClientes($dados, $query->id);
			redirect('clientes');


		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar clientes
			redirect('clientes');
		}

	}
	public function menu()
	{	
		//Carrega o Model clientes				
		$this->load->model('Clientes_model', 'clientes');					
		//Carrega a View
		$this->load->view('menu.php');
	}

		
}

