<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function login(){
        $this->load->view('usuario/login');
    }
    public function novo(){
        $this->load->view('usuario/cadastro_usuario');
    }
    function salvar(){
        $usuario=$this->input->post("usuario");
        $senha=$this->input->post("senha_usuario");
        $this->load->model('UsuarioModel');
        $this->UsuarioModel->inserir($usuario, md5($senha));
        $this->session->set_flashdata('msg', 'Dados inseridos com sucesso!');
        redirect('usuario/novo');
    }

    public function autenticar(){
        $nome_usuario=$this->input->post("nome_usuario");
        $senha=$this->input->post("senha");

        $this->load->model('UsuarioModel');
        $usuarioexiste = $this->UsuarioModel->recuperarLoginsenha($nome_usuario, md5($senha));

        if($usuarioexiste){
            $this->session->set_userdata("usuario", $usuarioexiste[0]);
            redirect('Skt/paginainicial');
        }else {
            $this->session->set_flashdata('msg', 'Nome de usuário ou senha incorretos.');
            redirect('usuario/login');
        }
    }

        function logoff(){
            $this->session->unset_userdata("usuario");
            redirect("usuario/login");
        }
    
}
