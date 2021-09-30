<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skt extends CI_Controller {
    function __construct(){
        parent::__construct();
        if (! $this->session->userdata("usuario")){
            redirect('usuario/login');
        }
    }

    public function paginainicial(){
        $this->load->model('ArquivoModel');
        $dados['registros'] = $this->ArquivoModel->recuperar()->result();

        $dados_cabecalho["titulo"] = "Pagina Inicial";

        $this->load->view('cabeçalho', $dados_cabecalho);
        $this->load->view('mainpages/pagina_inicial', $dados);
    }


}
    
