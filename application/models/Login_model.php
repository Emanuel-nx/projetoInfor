<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
    public function buscaPorEmailSenha($matricula, $senha){
        $this->db->where("matricula", $matricula);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuarios;
    }
}