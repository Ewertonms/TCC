<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class PublicacaoModel extends CI_Model{
        function inserir($tipo_publicacao){
            $sql = "INSERT INTO Publicacao (tipo_publicacao) values (?)";
            $dados = array($tipo_publicacao);
            $this->db->query($sql, $dados);
        }

        function recuperar(){
            $sql = "SELECT * FROM Publicacao";
            return $this->db->query($sql);
        }

        function recuperarIdpublicacao($id){
            $sql='SELECT * from Publicacao where id_publicacao = ?';
            $dados = array($id);
            return $this->db->query($sql, $dados)->result();
        }

        function atualizar($id, $publicacao_tipo){
            $sql = "UPDATE Publicacao set tipo_publicacao = ? WHERE id_publicacao = ?";
            $dados = array($publicacao_tipo, $id);
            $this->db->query($sql, $dados);
        }

        function excluir($id){
            $sql = "DELETE from Publicacao where id_publicacao = ?";
            $dados = array($id);
            $this->db->query($sql, $dados);
        }
    }