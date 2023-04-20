-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Abr-2023 às 00:32
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jr_construcoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(8) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  PRIMARY KEY (`id_CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_orcamento`
--

CREATE TABLE IF NOT EXISTS `cliente_orcamento` (
  `fk_cliente` int(11) NOT NULL,
  `fk_orcamento` int(11) NOT NULL,
  PRIMARY KEY (`fk_cliente`,`fk_orcamento`),
    FOREIGN KEY cliente(fk_cliente) REFERENCES cliente(id_CLIENTE) ,
    FOREIGN KEY orcamento(fk_orcamento) REFERENCES orcamento(id_orcamento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `senha` char(10) NOT NULL,
  `telefone` char(11) NOT NULL,
  `fk_adm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_funcionario`),
  KEY `fk_adm` (`fk_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `senha` char(10) NOT NULL,
  `telefone` char(11) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Estrutura da tabela `funcionario_orcamento`
--

CREATE TABLE IF NOT EXISTS `funcionario_orcamento` (
  `fk_funcionario` int(11) NOT NULL,
  `fk_orcamento` int(11) NOT NULL,
  PRIMARY KEY (`fk_funcionario`,`fk_orcamento`),
  KEY `orcamento` (`fk_orcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE IF NOT EXISTS `orcamento` (
  `id_orcamento` int(11) NOT NULL AUTO_INCREMENT,
  `preco_orcamento` decimal(10,2) DEFAULT NULL,
  `data_entrega` date NOT NULL,
  PRIMARY KEY (`id_orcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `data_pedido` date NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_produto`
--

CREATE TABLE IF NOT EXISTS `pedido_produto` (
  `fk_pedido` int(11) NOT NULL,
  `fk_produto` int(11) NOT NULL,
  PRIMARY KEY (`fk_pedido`,`fk_produto`),
  KEY `produto` (`fk_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `imagem_produto` (
    idimagem_produto INT PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(200) NOT NULL,
    fkproduto INT NOT NULL,
    FOREIGN KEY (fkproduto) REFERENCES produto(id_produto)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



--
-- Extraindo dados da tabela `produto`
--

insert into produto ( nome_produto, qtd_produto, preco) values ( 'Wine - Red, Black Opal Shiraz', 48, 28.17);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Syrup - Monin - Blue Curacao', 12, 28.61);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Glucose', 69, 67.55);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Whmis Spray Bottle Graduated', 2, 21.58);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Water - Spring Water, 355 Ml', 43, 69.68);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Cheese - Taleggio D.o.p.', 92, 62.62);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Lamb - Shanks', 64, 35.05);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Papadam', 35, 82.95);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Salt - Kosher', 19, 68.64);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Venison - Ground', 63, 46.52);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Calypso - Strawberry Lemonade', 35, 80.64);
insert into produto ( nome_produto, qtd_produto, preco) values ( 'Bread - Focaccia Quarter', 77, 3.59);


--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente_orcamento`
--
ALTER TABLE `cliente_orcamento`
  ADD CONSTRAINT `cliente_orcamento_ibfk_1` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`id_CLIENTE`),
  ADD CONSTRAINT `cliente_orcamento_ibfk_2` FOREIGN KEY (`fk_orcamento`) REFERENCES `orcamento` (`id_orcamento`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`fk_adm`) REFERENCES `adm` (`id_adm`);

--
-- Limitadores para a tabela `funcionario_orcamento`
--
ALTER TABLE `funcionario_orcamento`
  ADD CONSTRAINT `funcionario_orcamento_ibfk_1` FOREIGN KEY (`fk_funcionario`) REFERENCES `funcionario` (`id_funcionario`),
  ADD CONSTRAINT `funcionario_orcamento_ibfk_2` FOREIGN KEY (`fk_orcamento`) REFERENCES `orcamento` (`id_orcamento`);

--
-- Limitadores para a tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD CONSTRAINT `pedido_produto_ibfk_1` FOREIGN KEY (`fk_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `pedido_produto_ibfk_2` FOREIGN KEY (`fk_produto`) REFERENCES `produto` (`id_produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
