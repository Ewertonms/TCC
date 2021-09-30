<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class UsuarioModel extends CI_Model{
        function inserir($nome_usuario, $senha){
            $sql = "INSERT INTO cadastroUsuario (nome_usuario, senha) values (?, ?)";
            $dados = array($nome_usuario, $senha);
            $this->db->query($sql, $dados);
        }

        function recuperarLoginsenha($nome_usuario, $senha){
            $sql = 'SELECT * FROM cadastroUsuario where nome_usuario = ? and senha = ?';
            $dados = array($nome_usuario, $senha);
            return $this->db->query($sql, $dados)->result();
        }
    }