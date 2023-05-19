
-- Estrutura da tabela cliente
--

CREATE TABLE cliente (
  id_CLIENTE int(11) NOT NULL AUTO_INCREMENT,
  nome_usuario varchar(30) NOT NULL,
  email varchar(100) NOT NULL,
 senha char(8) NOT NULL,
  endereco varchar(50) NOT NULL,
  PRIMARY KEY (id_CLIENTE)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela cliente_orcamento
--

-- CREATE TABLE  cliente_orcamento (
--   fk_cliente int(11) NOT NULL,
--   fk_orcamento int(11) NOT NULL,
--   PRIMARY KEY (fk_cliente,fk_orcamento),
--     FOREIGN KEY cliente(fk_cliente) REFERENCES cliente(id_CLIENTE) ,
--     FOREIGN KEY orcamento(fk_orcamento) REFERENCES orcamento(id_orcamento)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela funcionario
--

CREATE TABLE  funcionario (
  id_funcionario int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  senha char(10) NOT NULL,
  telefone char(11) NOT NULL,
  fk_adm int(11) DEFAULT NULL,
  PRIMARY KEY (id_funcionario),
  KEY fk_adm (fk_adm)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------
CREATE TABLE  adm (
  id_adm int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  email varchar(90) NOT NULL,
  senha char(60) NOT NULL,
  telefone char(11) NOT NULL,
  PRIMARY KEY (id_adm)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



-- --------------------------------------------------------

--
-- Estrutura da tabela orcamento
--



-- --------------------------------------------------------

--
-- Estrutura da tabela pedido
--

CREATE TABLE  pedido (
  id_pedido int(11) NOT NULL AUTO_INCREMENT,
  data_pedido date NOT NULL,
  PRIMARY KEY (id_pedido)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela pedido_produto
--

CREATE TABLE  pedido_produto (
  fk_pedido int(11) NOT NULL,
  fk_produto int(11) NOT NULL,
  PRIMARY KEY (fk_pedido,fk_produto),
  KEY produto (fk_produto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE novidades(
  idnovidade INT NOT NULL AUTO_INCREMENT,
  texto VARCHAR(500) NOT NULL,
  imagem VARCHAR(200) NOT NULL,
  PRIMARY KEY (idnovidade)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE portifolio(
  idportifolio INT NOT NULL AUTO_INCREMENT,
  imagem VARCHAR(200) NOT NULL,
  PRIMARY KEY (idportifolio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela produto
--

CREATE TABLE  produto (
  id_produto int(11) NOT NULL AUTO_INCREMENT,
  nome_produto varchar(50) NOT NULL,
  preco decimal(10,2) NOT NULL,
  PRIMARY KEY (id_produto),
  imagem varchar (200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;





--
-- Extraindo dados da tabela produto
--

insert into produto ( nome_produto , preco) values ( 'Wine - Red, Black Opal Shiraz', 28.17);
insert into produto ( nome_produto , preco) values ( 'Syrup - Monin - Blue Curacao',  28.61);
insert into produto ( nome_produto , preco) values ( 'Glucose', 67.55);
insert into produto ( nome_produto , preco) values ( 'Whmis Spray Bottle Graduated', 21.58);
insert into produto ( nome_produto , preco) values ( 'Water - Spring Water, 355 Ml', 69.68);
insert into produto ( nome_produto , preco) values ( 'Cheese - Taleggio D.o.p.', 62.62);
insert into produto ( nome_produto , preco) values ( 'Lamb - Shanks', 35.05);
insert into produto ( nome_produto , preco) values ( 'Papadam', 82.95);
insert into produto ( nome_produto , preco) values ( 'Salt - Kosher', 68.64);
insert into produto ( nome_produto , preco) values ( 'Venison - Ground', 46.52);
insert into produto ( nome_produto , preco) values ( 'Calypso - Strawberry Lemonade', 80.64);
insert into produto ( nome_produto , preco) values ( 'Bread - Focaccia Quarter', 3.59);




-- inserindo imagens
INSERT INTO imagem_produto (imagem, fkproduto) VALUES 
('https://via.placeholder.com/300x200.png?text=Imagem+1', 1),
('https://via.placeholder.com/300x200.png?text=Imagem+2', 1),
('https://via.placeholder.com/300x200.png?text=Imagem+3', 2),
('https://via.placeholder.com/300x200.png?text=Imagem+4', 2),
('https://via.placeholder.com/300x200.png?text=Imagem+5', 3),
('https://via.placeholder.com/300x200.png?text=Imagem+6', 3),
('https://via.placeholder.com/300x200.png?text=Imagem+7', 4),
('https://via.placeholder.com/300x200.png?text=Imagem+8', 4),
('https://via.placeholder.com/300x200.png?text=Imagem+9', 5),
('https://via.placeholder.com/300x200.png?text=Imagem+10', 5),
('https://via.placeholder.com/300x200.png?text=Imagem+11', 6),
('https://via.placeholder.com/300x200.png?text=Imagem+12', 6),
('https://via.placeholder.com/300x200.png?text=Imagem+13', 7),
('https://via.placeholder.com/300x200.png?text=Imagem+14', 7),
('https://via.placeholder.com/300x200.png?text=Imagem+15', 8),
('https://via.placeholder.com/300x200.png?text=Imagem+16', 8),
('https://via.placeholder.com/300x200.png?text=Imagem+17', 9),
('https://via.placeholder.com/300x200.png?text=Imagem+18', 9),
('https://via.placeholder.com/300x200.png?text=Imagem+19', 10),
('https://via.placeholder.com/300x200.png?text=Imagem+20', 10);


--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela cliente_orcamento
--
ALTER TABLE cliente_orcamento
  ADD CONSTRAINT cliente_orcamento_ibfk_1 FOREIGN KEY (fk_cliente) REFERENCES cliente (id_CLIENTE),
  ADD CONSTRAINT cliente_orcamento_ibfk_2 FOREIGN KEY (fk_orcamento) REFERENCES orcamento (id_orcamento);

--
-- Limitadores para a tabela funcionario
--
ALTER TABLE funcionario
  ADD CONSTRAINT funcionario_ibfk_1 FOREIGN KEY (fk_adm) REFERENCES adm (id_adm);

--
-- Limitadores para a tabela funcionario_orcamento
--
ALTER TABLE funcionario_orcamento
  ADD CONSTRAINT funcionario_orcamento_ibfk_1 FOREIGN KEY (fk_funcionario) REFERENCES funcionario (id_funcionario),
  ADD CONSTRAINT funcionario_orcamento_ibfk_2 FOREIGN KEY (fk_orcamento) REFERENCES orcamento (id_orcamento);

--
-- Limitadores para a tabela pedido_produto
--
ALTER TABLE pedido_produto
  ADD CONSTRAINT pedido_produto_ibfk_1 FOREIGN KEY (fk_pedido) REFERENCES pedido (id_pedido),
  ADD CONSTRAINT pedido_produto_ibfk_2 FOREIGN KEY (fk_produto) REFERENCES produto (id_produto);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;