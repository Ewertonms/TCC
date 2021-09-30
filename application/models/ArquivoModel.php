<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ArquivoModel extends CI_Model{
        function inserir($titulo, $autor, $descricao, $id_publicacao, $id_tematica, $arquivo){
            $sql = "INSERT INTO Documento (titulo, autor, descricao, id_publicacao, id_tematica, arquivo) values (?, ?, ?, ?, ?, ?)";
            $dados = array($titulo, $autor, $descricao, $id_publicacao, $id_tematica, $arquivo);
            $this->db->query($sql, $dados);
        }

        function recuperar(){
            $sql = "SELECT * FROM Documento";
            return $this->db->query($sql);
        }

        function recuperarIddocumento($id){
            $sql='SELECT * from Documento INNER JOIN Tematica ON Documento.id_tematica = Tematica.id_tematica INNER JOIN Publicacao on Documento.id_publicacao = Publicacao.id_publicacao where Documento.id_documento= ?';
            $dados = array($id);
            return $this->db->query($sql, $dados)->result();
        }

        function atualizar($id, $nm_ti, $nm_at, $des_arq, $id_publicacao, $id_tematica, $caminho){
            $sql = "UPDATE Documento set titulo = ?, autor = ?, descricao = ?, id_publicacao = ?, id_tematica = ?, arquivo = ? WHERE id_documento = ?";
            $dados = array($nm_ti, $nm_at, $des_arq, $id_publicacao, $id_tematica, $caminho, $id);
            $this->db->query($sql, $dados);
        }

        function excluir($id){
            $sql = "DELETE from Documento where id_documento = ?";
            $dados = array($id);
            $this->db->query($sql, $dados);
        }

        function recuperarPublicacao(){
            $this->db->select('*');
            return $this->db->get('Publicacao')->result();
        }

        function recuperarTematica(){
            $this->db->select('*');
            return $this->db->get('Tematica')->result();
        }


    }