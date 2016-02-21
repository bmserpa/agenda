<?php

class Usuario {
    private $id;
    private $nome;
    private $sobrenome;
    private $data;
    private $opcao;
    private $cep;
    private $email;
    private $telefone;
    private $imagem;
    private $login;
    private $senha;



    public function __construct($id, $nome, $sobrenome, $data, $cep, $opcao, $email, $telefone, $imagem, $login, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data = $data;
        $this->cep = $cep;
        $this->opcao = $opcao;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->imagem = $imagem;
        $this->login = $login;
        $this->senha = $senha;

    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getData() {
        return $this->data;
    }

    function getCep() {
        return $this->cep;
    }


    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getOpcao() {
        return $this->opcao;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }



    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setEstoque($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setOpcao($opcao) {
        $this->opcao = $opcao;
    }

}
