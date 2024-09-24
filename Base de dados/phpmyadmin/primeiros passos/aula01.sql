
--NOVO BANCO DE DADOS--
CREATE DATABASE `joaoWB_aula01`;

--CRIAR TABLEA
CREATE TABLE tabela(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(300)
);

--USAR BASE DE DADOS
USE joaowm_aula01;

--CRIAR OUTRA TABLEA
CREATE TABLE tb2(
    id int AUTO_INCREMENT PRIMARY KEY,
    age int not null default 0
);

--ELIMINAR TABLEA
DROP TABLE tb2;

--Alterar coluna nome e tipo;
ALTER TABLE tabela CHANGE nome NAME text NOT NULL;