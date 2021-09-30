<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Tematica extends CI_Controller {
        function __construct(){
            parent::__construct();
            unset($_SESSION['msg']);
            if (! $this->session->userdata("usuario")){
                redirect('usuario/login');
            }
        }
    

        public function novo(){
            $dados_cabecalho["titulo"] = "Nova Temática";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('tematica/nova_tematica');
        }

        function salvar(){
            $tematica=$this->input->post("tematica");
            $this->load->model('TematicaModel');
            $this->TematicaModel->inserir($tematica);
            $this->session->set_flashdata('msg', 'Dados inseridos com sucesso!');
            $this->load->view('cabeçalho');
            redirect('tematica/listar');
        }

        function listar(){
            $this->load->model('TematicaModel');
            $dados["tematicas_registradas"] = $this->TematicaModel->recuperar()->result();
            $dados_cabecalho["titulo"] = "Listar Temáticas";
            $this->load->view("cabeçalho", $dados_cabecalho);
            $this->load->view("tematica/listar_tematica", $dados);
        }

        function detalhes($id){
            $this->load->model('TematicaModel');
            $dados['registro'] = $this->TematicaModel->recuperarIdtematica($id)[0];
            $dados_cabecalho["titulo"] = "Detalhes da Temática";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('tematica/detalhes_tematica', $dados);
        }

        function atualizar($id){
            $this->load->model('TematicaModel');
            $dados['registro'] = $this->TematicaModel->recuperarIdtematica($id)[0];
            $dados_cabecalho["titulo"] = "Modificar Temática";
            $this->load->view('cabeçalho', $dados_cabecalho);
            $this->load->view('tematica/atualizar_tematica', $dados);
        }

        function modificar($id){
            $tematica=$this->input->post("tematica");
            $this->load->model('TematicaModel');
            $this->TematicaModel->atualizar($id, $tematica);
            $this->session->set_flashdata('msg', 'Dados alterados com sucesso!');
            redirect('tematica/listar');
        }

        function excluir($id){
            $this->load->model('TematicaModel');
            $this->TematicaModel->excluir($id);
            $this->session->set_flashdata('msg', 'Dados excluidos com sucesso!');
            redirect('tematica/listar');
        }
    }
