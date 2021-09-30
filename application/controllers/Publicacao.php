<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Publicacao extends CI_Controller {
        function __construct(){
            parent::__construct();
            unset($_SESSION['msg']);
            if (! $this->session->userdata("usuario")){
                redirect('usuario/login');
            }
        }

        public function novo(){
            $dados_cabecalho["titulo"] = "Novo Tipo de Publicação";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('publicacao/nova_publicacao');
        }

        function salvar(){
            $publicacao=$this->input->post("publicacao_tipo");
            $this->load->model('PublicacaoModel');
            $this->PublicacaoModel->inserir($publicacao);
            $this->session->set_flashdata('msg', 'Dados inseridos com sucesso!');
            redirect('publicacao/listar');
        }

        function listar(){
            $this->load->model('PublicacaoModel');
            $dados['registros'] = $this->PublicacaoModel->recuperar()->result();
            $dados_cabecalho["titulo"] = "Listar Tipos de Publicações";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('publicacao/listar_publicacao', $dados);
        }

        function detalhes($id){
            $this->load->model('PublicacaoModel');
            $dados['registro'] = $this->PublicacaoModel->recuperarIdpublicacao($id)[0];
            $dados_cabecalho["titulo"] = "Detalhes do Tipo de Publicação";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('publicacao/detalhes_publicacao', $dados);
        }

        function atualizar($id){
            $this->load->model('PublicacaoModel');
            $dados['registro'] = $this->PublicacaoModel->recuperarIdpublicacao($id)[0];
            $dados_cabecalho["titulo"] = "Atualizar Tipo de Publicação";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('publicacao/atualizar_publicacao', $dados);
        }

        function modificar($id){
            $publicacao_tipo=$this->input->post("publicacao_tipo");
            $this->load->model('PublicacaoModel');
            $this->PublicacaoModel->atualizar($id, $publicacao_tipo);
            $this->session->set_flashdata('msg', 'Dados alterados com sucesso!');
            redirect('publicacao/listar');
        }

        function excluir($id){
            $this->load->model('PublicacaoModel');
            $this->PublicacaoModel->excluir($id);
            $this->session->set_flashdata('msg', 'Dados excluidos com sucesso!');
            redirect('publicacao/listar');
        }
    }
