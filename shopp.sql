-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2015 at 10:36 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shopp`
--

-- --------------------------------------------------------

--
-- Table structure for table `artigos`
--

CREATE TABLE `artigos` (
`id_artigo` tinyint(4) NOT NULL,
  `id_categoria` tinyint(4) DEFAULT NULL,
  `nome_artigo` varchar(30) NOT NULL,
  `descricao_artigo` varchar(255) NOT NULL,
  `preco_artigo` double(5,2) DEFAULT NULL,
  `stock_artigo` tinyint(4) DEFAULT NULL,
  `imagem_artigo` varchar(255) DEFAULT NULL,
  `promocao` enum('S','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artigos`
--

INSERT INTO `artigos` (`id_artigo`, `id_categoria`, `nome_artigo`, `descricao_artigo`, `preco_artigo`, `stock_artigo`, `imagem_artigo`, `promocao`) VALUES
(7, 8, 'MacBook pro 15''', 'to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the ', 999.99, 0, 'mac.jpg', ''),
(13, 8, 'iPad', 'tructures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 500.00, NULL, 'ipad.jpg', ''),
(14, 8, 'imac', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', 999.99, NULL, 'imac.jpg', ''),
(15, 8, 'Ipod Touch', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker in', 270.00, 0, 'ipod.jpg', ''),
(16, 8, 'iPhone 6', ' opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many', 850.00, NULL, 'iphone.jpg', ''),
(17, 7, 'Cabo', 'tructures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 22.00, NULL, 'cabo.jpg', ''),
(18, 7, 'Carregador', 'in some form, by injected humour, or randomised words which don''t look ', 30.00, NULL, 'carregador.jpg', ''),
(19, 7, 'Mala para portátil', 'o use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making ', 42.00, NULL, 'mala.jpg', ''),
(20, 7, 'Protetor ecra', 'eatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, c', 18.00, NULL, 'protetorecra.jpg', ''),
(21, 7, 'Capa iphone', 'm Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable ', NULL, NULL, 'capas.jpg', ''),
(22, 6, 'Impressora', 'm Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable ', 230.00, NULL, 'impressora.jpg', ''),
(23, 6, 'Gamepad', 'r, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum e', 214.00, NULL, 'Gamepad.jpg', ''),
(24, 6, 'Headphone', 's on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to', 290.00, NULL, 'auscultadores.jpg', ''),
(25, 6, 'Monitor', 'tes of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the ', 409.00, NULL, 'monitor.jpg', ''),
(26, 6, 'Teclado', ' the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent', 78.00, NULL, 'teclado.jpg', ''),
(27, 5, 'Memoria RAM', ' the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essent', 78.00, NULL, 'ram.jpg', ''),
(28, 5, 'Placa Grafica', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonor', 55.00, NULL, 'placagrafica.jpg', ''),
(29, 5, 'Motherboard', 'have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to us', 126.00, NULL, 'motherboard.jpg', ''),
(30, 5, 'Placa de Som', 'doubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and E', 247.00, NULL, 'placasom.jpg', ''),
(31, 5, 'CPU', 'ng this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from r', 260.00, NULL, 'cpu.jpg', ''),
(32, 9, 'Router', 'ng this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from r', 312.00, NULL, 'router.jpg', ''),
(33, 9, 'Adaptador HDMI', 'et, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup', 300.00, NULL, 'adaptadorhdmi.jpg', ''),
(34, 9, 'Placa de rede WIFI', 'even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, m', 220.00, NULL, 'antenas.jpg', ''),
(35, 9, 'Switches', 'nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e', NULL, NULL, 'switches.jpg', ''),
(36, 9, 'Powerline', 's eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad mi', 250.00, NULL, 'powerline.jpg', ''),
(37, 10, 'Anti-Virus pack 1', 's eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad mi', 289.00, NULL, 'antivirus.jpg', ''),
(38, 10, 'Anti-Virus pack 2', 'explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painfu', 173.00, NULL, 'antivirus2.jpg', ''),
(39, 10, 'Anti-Virus pack 3', 'ent, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxi', 368.00, NULL, 'antivirus3.jpg', ''),
(40, 10, 'Pack Office', 'righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in th', 200.00, NULL, 'office.jpg', ''),
(41, 10, 'Sistema Operativo', 'eatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, c', 190.00, NULL, 'sow8.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
`id_categoria` tinyint(4) NOT NULL,
  `nome_categoria` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome_categoria`) VALUES
(5, 'Componentes'),
(6, 'Periféricos'),
(7, 'Acessórios'),
(8, 'Dispositivos'),
(9, 'Redes'),
(10, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
`id_cliente` int(10) NOT NULL,
  `nome_login` varchar(15) NOT NULL,
  `palavra_passe` varchar(8) NOT NULL,
  `primeiro_nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `localidade` varchar(20) NOT NULL,
  `codigo_postal` char(8) NOT NULL,
  `telefone` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel_utilizador` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_login`, `palavra_passe`, `primeiro_nome`, `apelido`, `endereco`, `localidade`, `codigo_postal`, `telefone`, `email`, `nivel_utilizador`) VALUES
(10, 'isabelle', '12345', 'isabelle', 'cerveira', 'Lisboa', 'lx', '9999', 219009900, 'info@isa.pt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `compra_confirmada`
--

CREATE TABLE `compra_confirmada` (
`id_compra` int(5) NOT NULL,
  `data_compra` datetime NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `total_pagar` decimal(5,2) NOT NULL,
  `estado_compra` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compra_confirmada`
--

INSERT INTO `compra_confirmada` (`id_compra`, `data_compra`, `id_cliente`, `total_pagar`, `estado_compra`) VALUES
(1, '2015-03-31 00:00:00', 13, 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `compra_temporaria`
--

CREATE TABLE `compra_temporaria` (
  `sessao` char(50) NOT NULL,
  `id_artigo` tinyint(4) NOT NULL,
  `quantidade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compra_temporaria`
--

INSERT INTO `compra_temporaria` (`sessao`, `id_artigo`, `quantidade`) VALUES
('', 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `detalhes_compra`
--

CREATE TABLE `detalhes_compra` (
  `id_compra` int(5) NOT NULL,
  `quantidade_compra` int(10) NOT NULL,
  `id_artigo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalhes_compra`
--

INSERT INTO `detalhes_compra` (`id_compra`, `quantidade_compra`, `id_artigo`) VALUES
(0, 0, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
 ADD PRIMARY KEY (`id_artigo`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `compra_confirmada`
--
ALTER TABLE `compra_confirmada`
 ADD PRIMARY KEY (`id_compra`);

--
-- Indexes for table `compra_temporaria`
--
ALTER TABLE `compra_temporaria`
 ADD PRIMARY KEY (`sessao`,`id_artigo`);

--
-- Indexes for table `detalhes_compra`
--
ALTER TABLE `detalhes_compra`
 ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
MODIFY `id_artigo` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY `id_categoria` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `compra_confirmada`
--
ALTER TABLE `compra_confirmada`
MODIFY `id_compra` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;