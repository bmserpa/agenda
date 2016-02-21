<?php

require_once 'agendaclass.php';
require_once 'bancodedados.php';

class agendaDAO {
    private $bd;

    public function __construct($bd){
        $this->bd = $bd;
    }


    public function leUsuario(){
        $select = 'SELECT * FROM usuario ORDER by id';
        $result = $this->bd->executaSelecao($select);
        $listaUsuarios = array();
        while($dados = $result->fetch_array()){


            $id = $dados['id'];
            $nome = $dados['nome'];
            $sobrenome = $dados['sobrenome'];
            $data = $dados['data'];
            $cep = $dados['cep'];
            $opcao = $dados['opcao'];
            $email = $dados['email'];
            $telefone = $dados['telefone'];
            $imagem = $dados['imagem'];
            $login = $dados ['login'];
            $senha = $dados['senha'];

            $usuario = new Usuario($nome, $sobrenome, $data, $cep, $opcao, $email, $telefone, $imagem, $login, $senha);
            $listaUsuarios[] = $usuario;
        }
        return $listaUsuarios;
    }





    public function adicionaUsuario($usuario){
          $insert = 'INSERT INTO usuario VALUES(NULL, ?, ?, ?, ?, ?, ?, ? ,? ,? ,?)';
          $statement = $this->bd->preparaStatement($insert);
          $nome = $usuario->getNome();
          $sobrenome= $usuario->getSobrenome();
          $data = $usuario->getData();
          $cep = $usuario->getCep();
          $opcao = $usuario->getOpcao();
          $email = $usuario->getEmail();
          $telefone = $usuario->getTelefone();
          $imagem = $usuario->getimagem();
          $login = $usuario->getLogin();
          $senha = $usuario->getSenha();
          $statement->bind_param('ssssssssss',$nome, $sobrenome, $data, $cep, $opcao, $email, $telefone, $imagem, $login, $senha);
          return $statement->execute();
      }


       public function fazLogin($login, $senha){
            $select = 'SELECT * FROM usuario WHERE login = ? AND senha = ?';
            $statement = $this->bd->preparaStatement($select);
            $statement->bind_param('ss', $login, $senha);
            $statement->execute();
            $resultado = $statement->get_result();
            if($resultado){
                $listaUsuario = array();
                while($dados = $resultado->fetch_array()){
                    $id = $dados['id'];
                    $nome = $dados['nome'];
                    $sobrenome = $dados['sobrenome'];
                    $data = $dados['data'];
                    $cep = $dados['cep'];
                    $opcao = $dados['opcao'];
                    $email = $dados['email'];
                    $telefone = $dados['telefone'];
                    $imagem = $dados['imagem'];
                    $login = $dados['login'];
                    $senha = $dados['senha'];
                    $usuario = new usuario($id, $nome, $sobrenome, $data, $cep, $opcao, $email, $telefone, $imagem, $login, $senha);
                    $listaUsuario[] = $usuario;
                }
            return $listaUsuario;
            }
    }

}
?>
