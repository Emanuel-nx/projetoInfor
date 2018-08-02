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
}
