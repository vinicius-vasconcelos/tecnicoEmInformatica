CREATE SCHEMA livraria_suprema DEFAULT CHARACTER SET utf8;
USE livraria_suprema;

CREATE TABLE generos (
	gen_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gen_tipo VARCHAR(45)
);

CREATE TABLE autores (
	aut_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    aut_nome VARCHAR(45),
    aut_email VARCHAR(45),
    aut_telefone VARCHAR(11),
    aut_sexo ENUM('m', 'f'),
    aut_dt_nasc DATE
);

CREATE TABLE livros (
	liv_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    liv_nome VARCHAR(45),
    liv_paginas INT,
    liv_isbn INT,
    
    gen_codigo INT,
    aut_codigo INT,
    
    CONSTRAINT FK_LIVROS_GENEROS FOREIGN KEY (gen_codigo) REFERENCES  generos (gen_codigo),
    CONSTRAINT FK_LIVROS_AUTOR FOREIGN KEY (aut_codigo) REFERENCES  autores (aut_codigo)
    
);

CREATE TABLE editoras (
	edi_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    edi_nome VARCHAR(45),
    edi_endereco VARCHAR(45),
    
    liv_codigo INT,
    CONSTRAINT FK_EDITORAS_LIVROS FOREIGN KEY (liv_codigo) REFERENCES  livros (liv_codigo)
);
