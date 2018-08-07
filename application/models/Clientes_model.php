
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_Model extends CI_Model
{
	public function getClientes()
	{
		$query = $this->db->get('clientes');
		return $query->result();
	}
	//Adiciona um novo clientes na tabela clientes
    public function addClientes($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('clientes', $dados);		
	endif;
	}

	public function getClientesByID($id=NULL)
    {
    	if ($id != NULL):
        	//Verifica se a ID no banco de dados
       	 	$this->db->where('id', $id);        
        	//limita para apenas um regstro    
        	$this->db->limit(1);
        	//pega os produto
        	$query = $this->db->get("clientes");        
        	//retornamos o produto
        return $query->row();   
    endif;
    } 

    //Atualizr um produto na tabela clientes
    public function editarClientes($dados, $id) {
	    $this->db->update('clientes', $dados, array('id'=> $id));
    }

    //Apagar registro
     public function apagarClientes($id=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($id != NULL):
            //Executa a função DB DELETE para apagar o produto
            $this->db->delete('clientes', array('id'=>$id));            
        endif;
    } 
    //Muda status do clientes na tabela clientes 
    public function statusClientes($status=NULL, $id=NULL){
        //Verificamos se foi passado o a STATUS e ID como parametro
        if ($status != NULL && $id != NULL):
            //Executa a função DB UPDATE para mudar o status do produto
            $this->db->update('clientes', $status, array('id'=>$id));            
        endif;
    }      
}
