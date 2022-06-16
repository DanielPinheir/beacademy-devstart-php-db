--Criar um database
CREATE DATABASE db_store;

--Realizar alguma operação no database 
USE db_store;

--Criando  tabelas
--Categoria
CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR (100) NOT NULL
);

--Produto
CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo varchar(255) NOT NULL,
    valor FLOAT(5,2) NOT NULL,
    categoria_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);

--Visualizar a tabela criada
DESC tb_product;

--Inserindo valores na tabela
--Categoria
INSERT INTO tb_category (name, description)
VALUES
('Informatica', 'Produtos de Informática e acessórios para computador'),
('Escritorio', 'Materiais de escritório em geral'),
('Eletronicos', 'Aparelhos eletronicos em geral');