<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class TematicaModel extends CI_Model{
        function inserir($nometematica){
            $sql = "INSERT INTO Tematica (nometematica) values (?)";
            $dados = array($nometematica);
            $this->db->query($sql, $dados);
        }

        function recuperar(){
            $sql = "SELECT * FROM Tematica";
            return $this->db->query($sql);
        }

        function recuperarIdtematica($id){
            $sql='SELECT * from Tematica where id_tematica = ?';
            $dados = array($id);
            return $this->db->query($sql, $dados)->result();
        }

        function atualizar($id, $tematica){
            $sql = "UPDATE Tematica set nometematica = ? where id_tematica = ?";
            $dados = array($tematica, $id);
            $this->db->query($sql, $dados);
        }

        function excluir($id){
            $sql = "DELETE from Tematica where id_tematica = ?";
            $dados = array($id);
            $this->db->query($sql, $dados);
        }
    }