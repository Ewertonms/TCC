<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arquivo extends CI_Controller {
    function __construct(){
        parent::__construct();
        unset($_SESSION['msg']);
        if (! $this->session->userdata("usuario")){
            redirect('usuario/login');
        }
    }

    public function novo(){
        $this->load->model('ArquivoModel', 'Arquivo');
        $data["Publicacao"] = $this->Arquivo->recuperarPublicacao();
        $data["Tematica"] = $this->Arquivo->recuperarTematica();
        $dados_cabecalho["titulo"] = "Novo Documento";
        $this->load->view('cabeçalho', $dados_cabecalho);
        $this->load->view('arquivo/novo_arquivo', $data);
    }
    function salvar(){
        $nm_ti = $this->input->post("nome_titulo");
        $nm_at = $this->input->post("nome_autor");
        $des_arq = $this->input->post("descricao_arquivo");
        $id_publicacao = $this->input->post("publicacao");
        $id_tematica = $this->input->post("tematica");

        $config["upload_path"]="assets/arquivos/";
        $config["max_size"]= 2048;
        $config["allowed_types"]= "pdf|txt|docs";
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('archive')){
            $msg = $this->upload->display_errors();
            $this->session->flashdata('msg', $msg);
            print_r($msg);
        }else{
            $arquivo_upload =  $this->upload->data();
            $caminho = $config['upload_path'].$arquivo_upload['file_name'];
            $this->load->model('ArquivoModel');
            $this->ArquivoModel->inserir($nm_ti, $nm_at, $des_arq, $id_publicacao, $id_tematica, $caminho);
            $this->session->set_flashdata('msg', 'Dados inseridos com sucesso!');
            redirect('arquivo/listar');
        }
    }

    function listar(){
        $this->load->model('ArquivoModel');
        $dados['registros'] = $this->ArquivoModel->recuperar()->result();
        $dados_cabecalho["titulo"] = "Listar Documentos";
        $this->load->view('cabeçalho', $dados_cabecalho);
        $this->load->view('arquivo/listar_arquivo', $dados);
    }

    function detalhes($id){
        $this->load->model('ArquivoModel');
        $dados['registro'] = $this->ArquivoModel->recuperarIddocumento($id)[0];
        $dados_cabecalho["titulo"] = "Detalhes do Documento";
        $this->load->view('cabeçalho', $dados_cabecalho);
        $this->load->view('arquivo/detalhes_arquivo', $dados);
    }

    function atualizar($id){
        $this->load->model('ArquivoModel');
        $data['registro'] = $this->ArquivoModel->recuperarIddocumento($id)[0];
        $data["Publicacao"] = $this->ArquivoModel->recuperarPublicacao();
        $data["Tematica"] = $this->ArquivoModel->recuperarTematica();
        $dados_cabecalho["titulo"] = "Modificar Documento";
        $this->load->view('cabeçalho', $dados_cabecalho);
        $this->load->view('arquivo/atualizar_arquivo', $data);
    }

    function modificar($id){

        $nm_ti = $this->input->post("nome_titulo");
        $nm_at = $this->input->post("nome_autor");
        $des_arq = $this->input->post("descricao_arquivo");
        $id_publicacao = $this->input->post("publicacao");
        $id_tematica = $this->input->post("tematica");

        $config["upload_path"]="assets/arquivos/";
        $config["max_size"]= 2048;
        $config["allowed_types"]= "pdf|txt|docs";
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('archive')){
            $msg = $this->upload->display_errors();
            $this->session->flashdata('msg', $msg);
            print_r($msg);
        }else{
            $arquivo_upload =  $this->upload->data();
            $caminho = $config['upload_path'].$arquivo_upload['file_name'];
            $this->load->model('ArquivoModel');
            $this->ArquivoModel->atualizar($id, $nm_ti, $nm_at, $des_arq, $id_publicacao, $id_tematica, $caminho);
            $this->session->set_flashdata('msg', 'Dados modificados com sucesso!');
            redirect('arquivo/listar');
        }
    }

    function excluir($id){
        $this->load->model('ArquivoModel');
        $this->ArquivoModel->excluir($id);
        $this->session->set_flashdata('msg', 'Dados excluidos com sucesso!');
        redirect('arquivo/listar');
    }
}
