-- Para criar um banco de dados--
CREATE DATABASE db_escola;

--Mostrar banco de dados
SHOW DATABASES;

-- Selecionar o banco de dados--
USE db_escola;

--Criar uma tabela--
--AUTO_INCREMENT => vai incrementando automaticamente de forma crescente e sequencial(ExÇ1,2,3....)
CREATE TABLE tb_professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE tb_aluno (
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL          
);

--Deletar (excluir) uma tabela
DROP TABLE tb_professor;
DROP TABLE tb_aluno;
--Inserir dados
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Alessandro', 'ale2@email.com', '34511231312'
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Daniel', 'daniel@email.com', '12345678912'
);

--Selecionar os dados
SELECT * FROM tb_professor;

--Deletar um elemento da tabela
DELETE FROM tb_professor WHERE id='2';