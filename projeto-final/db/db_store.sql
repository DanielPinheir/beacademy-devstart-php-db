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
    photo varchar(400) NOT NULL,
    value FLOAT(7.2) NOT NULL,
    category_id INT(11) NOT NULL,
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

--Produto
INSERT INTO tb_product (name, description, photo, value, category_id, quantity, created_at)
VALUES
('Mouse', 'Mouse gamer sem fio', 'https://images.kabum.com.br/produtos/fotos/102652/mouse-sem-fio-gamer-logitech-g903-hero-16k-recarregavel-rgb-lightsync-design-ambidestro-11-botoes-16000dpi_mouse-sem-fio-gamer-logitech-g903-hero-16k-recarregavel-rgb-lightsync-design-ambidestro-11-botoes-16000dpi_1563483083_g.jpg', '599.00', '1', '10', NOW()),
('Teclado', 'Teclado gamer semfio', 'https://images.kabum.com.br/produtos/fotos/133055/teclado-sem-fio-mecanico-gamer-razer-blackwidow-v3-pro-chroma-razer-switch-green-us-rz03-03530200-r3u1_1607083616_g.jpg', '599.00', '1', '10', NOW()),
('Monitor', 'Monitor gamer 34 pol curvo', 'https://images.kabum.com.br/produtos/fotos/107267/monitor-gamer-led-lg-34-ultrawide-full-hd-ips-2-hdmi-displayport-freesync-144hz-1ms-altura-ajustavel-34gl750_monitor-gamer-led-lg-34-ultrawide-full-hd-ips-2-hdmi-displayport-freesync-144hz-1ms-altura-ajustavel-34gl750_1572618373_g.jpg', '2800.00', '1', '10', NOW());