USE db_escola;

--Inserindo 1 registro--
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Chiquim das tapiocas', 'chiquim@email.com', '12334552165');

--Inserindo vários registro--
INSERT INTO tb_professor (nome, email, cpf)
VALUES
('Zezim das rapaduras', 'zezim@email.com', '12312332132'),
('Maria das rapaduras', 'maria@email.com', '12312334732'),
('Chiquinha das rapaduras', 'chica@email.com', '12386332132');

--Excluir 1 registro--
DELETE FROM tb_professor WHERE email='zezim@email.com';

DELETE FROM tb_professor WHERE id='1';

--Excluir registros com id > 5--
DELETE FROM tb_professor WHERE id>'5';

--Excluir tudo--
--Muito cuidado com esse comando; Exclui tudo da tabela
DELETE FROM tb_professor;

--Editar dados de 1 registro--
UPDATE tb_professor SET nome='Luiza da Caucaia' WHERE id='7';

--Editar dados de todos os registros--
--Cuidado pois depois de atualizar só poderá voltar com backup
UPDATE tb_professor SET nome='Francisco';

--Selecionar todos os dados de todos professores
SELECT * FROM tb_professor;

--Selecionar todos os dados do professor de id=5
SELECT * FROM tb_professor WHERE id='5';

--Selecionar alguns dados de todos os professores
SELECT nome, cpf FROM tb_professor;


