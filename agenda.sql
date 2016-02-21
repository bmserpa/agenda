CREATE DATABASE agenda;

USE agenda;

CREATE TABLE IF NOT EXISTS usuario (

    id INTEGER NOT NULL AUTO_INCREMENT,

    nome VARCHAR(60),

    sobrenome VARCHAR(60),

    data DATE,

    cep INTEGER(9),

    opcao VARCHAR(12),

    email VARCHAR(200),

    telefone INTEGER(12),

    imagem BLOB,

    login VARCHAR(60),

    senha VARCHAR(60),

    PRIMARY KEY (id));
