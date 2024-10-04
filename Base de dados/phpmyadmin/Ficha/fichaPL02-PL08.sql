PRATICA LABORAL 03________________________________________________

1; Feito
2; Feito
3; Feito

//Criar tabelas

create table Seccao(
 numSec int not null AUTO_INCREMENT,
 nome varchar(0) not null,
 cidade varchar(20) not null,
 CONSTRAINT Primary Key PK_numSecao(numSec)
);

create table Empregado(
 numEmp int not num AUTO_INCREMENT,
 nome varchar(20) not null,
 seccao int not null,
 posto varchar(20),
 chefe int,
 salario int not null,
 comissão int not null default 0, 
);

//INSERIR REGISTRO

INSERT INTO seccao(numSec,nome,cidade)VALUES
(10,"Fabrico","Porto"),
(20,"Comercial","Porto"),
(30,"Marketing","Braga"),
(40,"Planeamento","Guimarães"),
(50,"Administração","Porto"),
(60,"Informática","Braga"),
(70,"Recursos Humanos","Guimarães");

INSERT INTO empregado(numEmp,nome,seccao,poso,chefe,salario,comissao)VALUES
(1,"Ana",10,"Programador",3,3000,10),
(2,"Nuno",70,"Engenheiro",1,1500,40),
(3,"Álvaro",50,"Administrador",0,2500,0),
(4,"António",10,"Engenheiro",3,1450,20),
(5,"Susana",20,"Administrador",0,2750,30),
(6,"Cláudio",60,"Vendedor",4,1000,50),


4
 a. Selecionar o nome e cidade que representa o numero de Seccão 70.
 b. Selecionar o empregado que tem comissão maior que o seu ordenado.
 c. Selectionar a secção cujo o nome da cidade é igual a "Porto".
 d. Selecionar o nome, salario e comissão do empregado, cujo o seu salário é maior ou igual a 20 vezes a sua comissão, selecionar o que tenho um salário de 2000.
 e. Selecionar o distritos de cada empregado.
 f. Selecionar o nome, o posto e o salario dos empregados que não sejam da secção 70 (Recursos humanos), e ordenar os registros por posto e salario de empregador de forma decrescente.
 g. Selecionar o nome dos trabalhadores que não sejam da região do porto.
 h. Seleciona o nome dos empregadores cujo nome começam em A e terminam em a.
 i. Selecionar os chefes das tabelas.
 j. Selecionar os registros de empregado, onde não sejam da secção 10 (Fabrico), mas que seja do mesmo posto.
 k. Selecionar o empregador que seja chefe e receba um ordenado 2 * maior, ordenando os registros por seu salário de forma decrescente.
 L. Selecionar o nome, posto e secção dos empregados cuja secção seja 20,30,40.
 M. Selecionar o nome e a cidade da secção dos empregados.
 N. Soma dos salários dos Engenheiros e programadores durante um ano.
 O. Selecionar a secção e o numero total de registro dos nomes de empregados, ordenados pela secção.
 P. Selecionar a soma dos salários dos trabalhadores, agrupados por secção.
 Q. Selecionar o posto, a contagem de trabalhadores tudo ordenado por posto.
 R. Selecionar a média do salario de trabalhadores, ordenado por posto.
 S. Selecionar os salários mais altos para cada posto.
 T. Selecionar o posto de trabalhadores que tenham mais ou 2 pessoas.
 U. Selecionar a media de posto de trabalhadores com mais ou 2 pessoas.

PRATICA LABORAL 04________________________________________________

1.Feito

2.

CREATE TABLE Cliente(
    idC int AUTO_INCREMENT,
    nome varchar(50) not null,
    morada varchar(250),
    estado Bit,
    CONSTRAINT PRIMARY KEY PK_idCliente(idC)
);

CREATE TABLE Produto(
    idP int AUTO_INCREMENT,
    descricao varchar(100) not null,
    preco decimal(10,2),
    CONSTRAINT PRIMARY KEY PK_idProduto(idP)
);

CREATE TABLE Venda(
    prod int not null,
    cli int not null,
    dataId datetime AUTO_INCREMENT,
    qtd int,
    CONSTRAINT PRIMARY KEY PK_venda(dataId,prod,cli),
    CONSTRAINT FOREIGN KEY FK_Produto(prod) REFERENCES Produto(idP),
    CONSTRAINT FOREIGN KEY FK_Cliente(cli) REFERENCES Cliente(idC)
);

3.

INSERT INTO cliente(nome,morada,estado)
VALUES
("Helena","Perafita – Freixieiro",1),
("Raul Simas","Palmela",0);

INSERT INTO produto(descricao,preco)
VALUES
("Rato Logitec XPTO 1",10),
("Monitor Sony Vaio XPTO",120);

INSERT INTO venda(cli,prod,qtd,dataId)
VALUES
(1,1,1,"2012-04-05"),
(2,1,5,"2012-04-05")

4.

a.___
UPDATE 
venda
SET
qtd = 100
WHERE
cli = 2

b.___
UPDATE
cliente
SET
morada = "Porto"
WHERE
idC = 2; 

c.___
UPDATE
produto
SET
preco = 100
WHERE
descricao LIKE "Monitor%"

5.

a.___
SELECT * FROM produto

b.___
SELECT nome FROM cliente WHERE estado = 1

c.___
SELECT
v.*
FROM
venda as v
INNER JOIN cliente as c ON v.cli = c.idC
WHERE c.nome = "Raul Simas"

d.___
SELECT
v.*
FROM
venda as v
INNER JOIN cliente as c ON v.cli = c.idC
WHERE c.nome  LIKE "H%"

e.___
SELECT
COUNT(*)
FROM
venda as v
INNER JOIN cliente as c ON c.idC = v.cli

f.___
SELECT
MAX(p.preco)
FROM
produto as p;

g.___
SELECT
*
FROM
produto
WHERE preco <= 100

h.___
SELECT
c.nome
FROM
cliente as c
WHERE c.idC NOT IN (SELECT cli FROM venda)

I.___
SELECT
SUM(v.qtd * p.preco)
FROM venda as v
INNER JOIN produto as p ON v.prod = p.idP
GROUP BY v.dataId;