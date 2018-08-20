<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{ // criação da classe Login
 
    public function autenticar(){
 
        $this->load->model("usuarios_model");// chama o modelo usuarios_model
        $matricula = $this->input->post("matricula");// pega via post o matricula que venho do formulario
        $senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
        $usuario = $this->usuarios_model->buscaPorMatriculaSenha($matricula,$senha); // acessa a função buscaPormatriculaSenha do modelo
 
        if($usuario){
            $this->session->set_userdata("usuario_logado", $usuario);
            $dados = array("mensagem" => "Logado com sucesso!");
        }else{
            $dados = array("mensagem" => "Não foi possível fazer o Login!");
        }
 
        $this->load->view("login", $dados);
    }
}