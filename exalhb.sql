-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Mar-2022 às 20:07
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exalhb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `confirmado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`id`, `id_registro`, `nickname`, `senha`, `confirmado`) VALUES
(1, 1, 'Yuri-Takahashi', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1),
(2, 2, 'Reeckt', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1),
(3, 3, 'Amaral', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1),
(4, 4, 'Glayve', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1),
(5, 5, 'Promotus', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1),
(6, 6, 'Sly.p', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1),
(7, 7, 'NEWCAPMAN', '79cbb55834b133833194c758b503e9ec8ac7de6bd1b4c185cba0d65f1d09ee4eba2db621c20a9c47059165457f8b075c36070fcace5fafbe593eb51ce9d5c6af', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adv`
--

CREATE TABLE `adv` (
  `id` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `motivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adv`
--

INSERT INTO `adv` (`id`, `id_registro`, `motivo`) VALUES
(1, 1, 'aaaaaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bugs`
--

CREATE TABLE `bugs` (
  `id` int(11) UNSIGNED NOT NULL,
  `local` varchar(250) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bugs`
--

INSERT INTO `bugs` (`id`, `local`, `msg`) VALUES
(1, 'melhores-da-semana', '<strong>Nickname: </strong> majoryanzinho <br/><strong>Tipo: </strong> treinador <br/><strong>Quantidade certa: </strong> asdasd <br/><strong>Prova: </strong> <a href=\'http://projetou.pc/sihb/assets/media/reportedbug/screenshot_5ed89736dc0b4.jpg\'>Prova</a> <br/>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT 0,
  `inicio` datetime NOT NULL,
  `fim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`id`, `id_registro`, `tipo`, `inicio`, `fim`) VALUES
(1, 30, 1, '2022-01-11 22:05:42', '0000-00-00 00:00:00'),
(2, 16, 1, '2022-01-11 22:08:50', '0000-00-00 00:00:00'),
(3, 23, 1, '2022-01-12 13:44:00', '0000-00-00 00:00:00'),
(4, 23, 1, '2022-01-13 14:21:15', '2022-01-13 16:27:38'),
(5, 17, 1, '2022-01-16 18:14:51', '0000-00-00 00:00:00'),
(6, 23, 0, '2022-01-17 13:39:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `confianca_voto`
--

CREATE TABLE `confianca_voto` (
  `id` int(11) UNSIGNED NOT NULL,
  `data_voto` datetime NOT NULL,
  `por` varchar(250) NOT NULL DEFAULT '',
  `tipo` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `confianca_voto`
--

INSERT INTO `confianca_voto` (`id`, `data_voto`, `por`, `tipo`) VALUES
(3, '2020-06-22 14:57:40', 'sihb', 1),
(4, '2022-03-04 21:08:33', 'Reeckt', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_area` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(37) NOT NULL DEFAULT 'https://i.imgur.com/emN1tEu.png',
  `descricao` mediumtext DEFAULT NULL,
  `cor` varchar(13) NOT NULL DEFAULT '54, 217, 0',
  `modulo_nome` varchar(250) NOT NULL DEFAULT 'Modulo Único',
  `valor` smallint(6) NOT NULL DEFAULT 0,
  `vip` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_alunos`
--

CREATE TABLE `cursos_alunos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `completo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_area`
--

CREATE TABLE `cursos_area` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(250) CHARACTER SET utf8 NOT NULL,
  `cor` varchar(250) NOT NULL,
  `imagem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos_area`
--

INSERT INTO `cursos_area` (`id`, `nome`, `cor`, `imagem`) VALUES
(1, 'de Educação e Civismo', '#4d4dff', 'https://i.imgur.com/LeRvm21.png'),
(2, 'de ComunicaÃ§Ã£o', '#FF4000', 'https://i.imgur.com/OrWEpVI.png'),
(3, 'JurÃ­dico', '#111111', 'https://i.imgur.com/inkHYFU.png'),
(4, 'LogistÃ­ca', '#8000ff', 'https://i.imgur.com/l6qtPOn.png'),
(5, 'de Recursos Humanos', '#36D900', 'https://i.imgur.com/7W84kAM.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_aulas`
--

CREATE TABLE `cursos_aulas` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(250) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ordem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_historico`
--

CREATE TABLE `cursos_historico` (
  `id` int(11) UNSIGNED NOT NULL,
  `data_viewed` datetime NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_modulos`
--

CREATE TABLE `cursos_modulos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `cursos_modulos`
--

INSERT INTO `cursos_modulos` (`id`, `nome`) VALUES
(1, 'Modulo Ãšnico'),
(2, 'Intermediário'),
(3, 'Avançado'),
(8, 'super avançado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_videos`
--

CREATE TABLE `cursos_videos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_aula` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `qualidades` longtext NOT NULL,
  `patente_id` tinyint(3) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `id_registro`, `nickname`, `qualidades`, `patente_id`, `data`) VALUES
(2, 4, 'Glayve', 'Disciplina;Humildade;Lealdade;Honestidade', 7, '2022-03-05 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emblemas`
--

CREATE TABLE `emblemas` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(250) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `quarto` varchar(250) NOT NULL DEFAULT 'http://www.habbo.com.br/room/140947048',
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emblemas`
--

INSERT INTO `emblemas` (`id`, `img`, `nome`, `descricao`, `quarto`, `status`) VALUES
(1, 'https://www.habbo.com.br/habbo-imaging/badge/b04064t48164s11104t54114t27111892ed000acb4393c77ffd989ddb3128a.gif', 'SFI - Integrantes', 'Grupo designado aos integrantes e admiradores do Serviço Federal de Inteligência.  ', 'http://www.habbo.com.br/room/140947048', 1),
(2, 'https://www.habbo.com.br/habbo-imaging/badge/b22064t48164s12103t50114t27111accdb0099ff44831033a53f747e30b3d.gif', '[SFI] Policial/Estagiário', 'Distintivo de Policial. Policial é uma patente não comprável e integra o Quadro Auxiliar de Praças do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(3, 'https://www.habbo.com.br/habbo-imaging/badge/b22064t48164s12104t51114t27111c2b5a7982a2f7c1ecf21a856f44b3031.gif', '[SFI] Soldado/Assistente', 'Distintivo de Soldado. Soldado é uma patente não comprável e integra o Quadro Auxiliar de Praças do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(4, 'https://www.habbo.com.br/habbo-imaging/badge/b22064t48164s12104t52114t271111b97188800890af7fcc056e6355003e7.gif', '[SFI] Cabo/Analista', 'Distintivo de Cabo. Cabo é uma patente não comprável e integra o Quadro Auxiliar de Praças do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2),
(5, 'https://www.habbo.com.br/habbo-imaging/badge/b22064t48164s11103t53114t2711118e4716e1bd074fb79a20901ca409fb1.gif', '[SFI] Sargento/Supervisor', 'Distintivo de Sargento. Sargento é uma patente não comprável e integra o Quadro Auxiliar de Praças do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(6, 'https://www.habbo.com.br/habbo-imaging/badge/b22064t48164s11103t54114t27111b29c49bed0c50eb8a1b1e66c36dbf95b.gif', '[SFI] Subtenente/Gestor', 'Distintivo de Subtenente. Subtenente é uma patente não comprável e integra o Quadro Auxiliar de Praças do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(7, 'https://www.habbo.com.br/habbo-imaging/badge/b22144t48234s12103t50114t27111b4eb93f0a5d218a23228c304e0ddec96.gif', '[SFI] Tenente/Escrivão', 'Distintivo de Tenente. Tenente é uma patente não comprável e integra o Quadro Auxiliar de Oficiais do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2),
(8, 'https://www.habbo.com.br/habbo-imaging/badge/b22144t48234s12104t51114t27111f794a87dae58f9def60d9923571ee3f0.gif', '[SFI] Capitão/Perito', 'Distintivo de Capitão. Capitão é uma patente não comprável e integra o Quadro Auxiliar de Oficiais do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(9, 'https://www.habbo.com.br/habbo-imaging/badge/b22144t48234s12103t52114t27111742a4e69cf4265a7a3daffd42be2dbe2.gif', '[SFI] Major/Detetive', 'Distintivo de Major. Major é uma patente não comprável e integra o Quadro Auxiliar de Oficiais do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(10, 'https://www.habbo.com.br/habbo-imaging/badge/b22144t48234s11104t53114t27111ccca190488037fe2331fc659135c5eac.gif', '[SFI] Coronel/Superintendente', 'Distintivo de Coronel. Coronel é uma patente não comprável e integra o Quadro Auxiliar de Oficiais do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2),
(11, 'https://www.habbo.com.br/habbo-imaging/badge/b22144t48234s11104t54114t27111a73321b07c5810d2cfa3f893b78b3488.gif', '[SFI] Comandante/Delegado', 'Distintivo de Comandante. Comandante é uma patente não comprável e integra o Quadro Auxiliar de Oficiais do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2),
(12, 'https://www.habbo.com.br/habbo-imaging/badge/b08244s37134s12243t50124t271213ddb892a7be0dd757e76d7135ea43d5b.gif', '[SFI] Diretor', 'Distintivo de Diretor. Diretor é um cargo de competência que integra o Quadro Deliberativo do Serviço Federal de Inteligência.', 'http://www.habbo.com.br/room/140947048', 2),
(13, 'https://www.habbo.com.br/habbo-imaging/badge/b08244s37134s12244t51124t27121da000de9ec44b0f18e9ab93c2dfcc86c.gif', '[SFI] Diretor-Geral', 'Distintivo de Diretor-Geral. Diretor-Geral é um cargo de competência que integra o Quadro Deliberativo do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2),
(14, 'https://www.habbo.com.br/habbo-imaging/badge/b08244s37134s12244t52124t27121e91cbcede485231c078a0178192fe340.gif', '[SFI] Vice-Presidente', 'Distintivo de Vice-Presidente. Vice-Presidente é um cargo de competência que integra o Quadro Deliberativo do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2),
(15, 'https://www.habbo.com.br/habbo-imaging/badge/b08244s37134s11243t53124t27121d68439eec4a63bc285f8de37b99d1f7b.gif', '[SFI] Presidente', 'Distintivo de Presidente. Presidente é um cargo de competência que integra o Quadro Deliberativo do Serviço Federal de Inteligência. ', 'http://www.habbo.com.br/room/140947048', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `externos`
--

CREATE TABLE `externos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_externo` int(11) NOT NULL,
  `cargo` tinyint(4) NOT NULL,
  `nickname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `externos`
--

INSERT INTO `externos` (`id`, `id_registro`, `id_externo`, `cargo`, `nickname`) VALUES
(1, 2, 2, 4, 'sihb'),
(4, 2, 3, 2, 'FBI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faixas`
--

CREATE TABLE `faixas` (
  `id` int(11) UNSIGNED NOT NULL,
  `ordem` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL DEFAULT '',
  `slug` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faixas`
--

INSERT INTO `faixas` (`id`, `ordem`, `nome`, `slug`) VALUES
(1, 1, 'Branca', 'branca'),
(2, 2, 'Azul', 'azul'),
(3, 3, 'Roxa', 'roxa'),
(4, 4, 'Marrom', 'marrom'),
(5, 5, 'Preta', 'preta'),
(6, 6, 'Vermelha', 'vermelha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum`
--

CREATE TABLE `forum` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(250) NOT NULL,
  `data` datetime NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  `autor` varchar(250) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `categoria` varchar(250) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `forum`
--

INSERT INTO `forum` (`id`, `slug`, `data`, `titulo`, `texto`, `autor`, `autor_id`, `categoria`, `status`) VALUES
(1, 'topico-teste', '2021-12-26 18:20:27', 'Tópico teste', '<p>Ol&aacute;! Este &eacute; um t&oacute;pico de teste para o f&oacute;rum do SFI!</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 'SFI', 2, 'Sugestões', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_comentarios`
--

CREATE TABLE `forum_comentarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_topico` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `comentario` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `quarto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `honrarias`
--

CREATE TABLE `honrarias` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info`
--

CREATE TABLE `info` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(11) UNSIGNED NOT NULL,
  `tipo` varchar(520) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_codigos`
--

CREATE TABLE `loja_codigos` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `expiracao` datetime NOT NULL,
  `limite` tinyint(4) NOT NULL,
  `is_limited` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_cods_confirm`
--

CREATE TABLE `loja_cods_confirm` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_codigo` int(11) NOT NULL,
  `codigo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja_cods_confirm`
--

INSERT INTO `loja_cods_confirm` (`id`, `id_registro`, `id_codigo`, `codigo`) VALUES
(2, 2, 1, 'sihbnew');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_compras`
--

CREATE TABLE `loja_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `data` datetime NOT NULL,
  `tipo` tinyint(2) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  `preco` int(11) NOT NULL,
  `presente` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `loja_compras`
--

INSERT INTO `loja_compras` (`id`, `id_registro`, `id_comprador`, `id_produto`, `nickname`, `data`, `tipo`, `img`, `msg`, `preco`, `presente`, `status`) VALUES
(4, 2, 2, 15, 'Reeckt', '2022-03-05 13:10:36', 1, 'https://i.imgur.com/gelhQhL.gif', 'Apresentando-se para o trabalho!', 5, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_prods`
--

CREATE TABLE `loja_prods` (
  `id` int(11) UNSIGNED NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `vip` tinyint(1) NOT NULL,
  `is_limited` tinyint(1) NOT NULL DEFAULT 0,
  `limite` int(11) NOT NULL DEFAULT 1000,
  `nome` varchar(500) NOT NULL,
  `valor_anterior` int(11) NOT NULL DEFAULT 0,
  `valor` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `style` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT 'none;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja_prods`
--

INSERT INTO `loja_prods` (`id`, `tipo`, `vip`, `is_limited`, `limite`, `nome`, `valor_anterior`, `valor`, `img`, `style`) VALUES
(15, 1, 0, 0, 999, 'Apresentando-se para o trabalho!', 0, 5, 'https://i.imgur.com/gelhQhL.gif', 'none;'),
(71, 1, 0, 0, 1000, 'Visão de um Gavião', 0, 5, 'https://i.imgur.com/a9394y5.gif', 'none;'),
(83, 5, 0, 0, 1000, 'Participei do Corridão da Marinha!', 0, 5, 'https://i.imgur.com/90MjlpT.gif', 'none;'),
(102, 1, 0, 0, 1000, 'Eu sou camisa 10!', 0, 5, 'https://i.imgur.com/TtrUA0B.gif', 'none;'),
(103, 1, 0, 0, 999, 'Eu sou de Sagitário!', 0, 5, 'https://i.imgur.com/lsB6Hl6.gif', 'none;'),
(104, 1, 0, 0, 1000, 'Eu sou de Leão!', 0, 5, 'https://i.imgur.com/MLnkIrs.gif', 'none;'),
(105, 1, 0, 0, 999, 'Eu sou de Áries!', 0, 5, 'https://i.imgur.com/JqmwpA6.gif', 'none;'),
(106, 1, 0, 0, 1000, 'Eu sou de Virgem!', 0, 5, 'https://i.imgur.com/9jPtqAJ.gif', 'none;'),
(107, 1, 0, 0, 1000, 'Eu sou de Capricórnio!', 0, 5, 'https://i.imgur.com/a1ns7Km.gif', 'none;'),
(108, 1, 0, 0, 1000, 'Eu sou de Touro!', 0, 5, 'https://i.imgur.com/YykaHsk.gif', 'none;'),
(109, 1, 0, 0, 1000, 'Eu sou de Câncer!', 0, 5, 'https://i.imgur.com/UVIrj0P.gif', 'none;'),
(110, 1, 0, 0, 999, 'Eu sou de Peixes!', 0, 5, 'https://i.imgur.com/iLew01R.gif', 'none;'),
(111, 1, 0, 0, 1000, 'Eu sou de Escorpião!', 0, 5, 'https://i.imgur.com/eaSS62E.gif', 'none;'),
(112, 1, 0, 0, 1000, 'Eu sou de Aquário!', 0, 5, 'https://i.imgur.com/lNwH0qw.gif', 'none;'),
(113, 1, 0, 0, 1000, 'Eu sou de Libra!', 0, 5, 'https://i.imgur.com/HaInpTk.gif', 'none;'),
(114, 1, 0, 0, 999, 'Eu sou de Gêmeos!', 0, 5, 'https://i.imgur.com/gqhVuT2.gif', 'none;'),
(115, 1, 0, 0, 999, 'Flamengo até morrer!', 0, 5, 'https://i.imgur.com/8gOR4Js.gif', 'none;'),
(116, 1, 0, 0, 998, 'Corinthians até morrer!', 0, 5, 'https://i.imgur.com/ijDbxSk.gif', 'none;'),
(117, 1, 0, 0, 999, 'São Paulo até morrer!', 0, 5, 'https://i.imgur.com/Rm7Nz9V.gif', 'none;'),
(122, 1, 0, 0, 999, 'Eu amo meu Brasil!', 0, 5, 'https://i.imgur.com/h4aYzvc.gif', 'none;'),
(123, 1, 0, 0, 999, 'Eu amo meu Portugal!', 0, 5, 'https://i.imgur.com/n49Ygsc.gif', 'none;'),
(129, 1, 0, 0, 999, 'Recebi uma Honraria!', 0, 5, 'https://i.imgur.com/95YD2XI.gif', 'none;'),
(132, 1, 0, 0, 999, 'Soldado', 0, 5, 'https://i.imgur.com/OR5yUMu.gif', 'none;'),
(133, 1, 0, 0, 1000, 'Xerife ', 0, 5, 'https://i.imgur.com/nJSzhIe.gif', 'none;'),
(141, 1, 0, 0, 1000, 'Eu sou WebGalanteador', 0, 5, 'https://i.imgur.com/rBuob2S.gif', 'none;'),
(168, 1, 0, 0, 999, 'La casa de papel', 0, 5, 'https://i.imgur.com/SW47WUl.gif', 'none;'),
(180, 1, 0, 0, 1000, 'The Flash', 0, 5, 'https://i.imgur.com/T4seJkC.gif', 'none;'),
(183, 1, 0, 0, 999, 'Fiquei em casa!', 0, 5, 'https://i.imgur.com/IS4NRcS.gif', 'none;'),
(184, 1, 0, 0, 999, 'La casa de papel - ', 0, 10, 'https://i.imgur.com/jVFy7OL.gif', 'none;'),
(185, 1, 0, 0, 999, 'Noob', 0, 5, 'https://i.imgur.com/mTTKD13.gif', 'none;'),
(186, 1, 0, 0, 999, 'Jason Voorhees', 0, 5, 'https://i.imgur.com/D4yoZpT.gif', 'none;'),
(187, 1, 0, 0, 998, 'Orgulho de ser quem somos!', 0, 5, 'https://i.imgur.com/1h9In5V.gif', 'none;'),
(189, 1, 0, 0, 1000, 'Cientista Louco!', 0, 5, 'https://i.imgur.com/krcJsmF.gif', 'none;'),
(190, 1, 0, 0, 999, 'Os Vingadores', 0, 10, 'https://i.imgur.com/YEDPt5X.gif', 'none;'),
(192, 1, 0, 0, 1000, 'Igualdade de Gênero!', 0, 10, 'https://i.imgur.com/mcq1L6c.gif', 'none;'),
(193, 1, 0, 0, 1000, 'Bjon Ironside - Vikings', 0, 15, 'https://i.imgur.com/7Zx1asc.gif', 'none;'),
(195, 1, 0, 0, 1000, 'Lexa -  The 100', 0, 20, 'https://i.imgur.com/FjcWTjh.gif', 'none;'),
(197, 1, 0, 0, 1000, 'Stan lee -  Criador de heróis', 0, 20, 'https://i.imgur.com/9pbNqmC.gif', 'none;'),
(198, 1, 0, 0, 1000, 'Professor - La Casa de Papel', 0, 20, 'https://i.imgur.com/rjdytx9.gif', 'none;'),
(207, 1, 0, 0, 998, 'Senhor Vírus', 0, 5, 'https://i.imgur.com/ImigDQp.png', 'none;'),
(208, 1, 0, 0, 998, 'Lava uma mão, lava a outra', 0, 5, 'https://i.imgur.com/E9WO8B2.png', 'none;'),
(222, 1, 0, 0, 998, 'O amor é livre!', 0, 10, 'https://i.imgur.com/IDNeDsz.png', 'none;'),
(223, 1, 0, 0, 999, 'Coringa - Está em choque? Liga pro Batman', 0, 10, 'https://i.imgur.com/LkbBrhL.gif', 'none;'),
(226, 1, 0, 0, 998, 'Torcedor Fanático do Paris Saint-Germain Football Club', 0, 5, 'https://3.bp.blogspot.com/-HcLQsESsLjs/XWRjtgiNsDI/AAAAAAABToE/nblpq2reOM4QoD6dw5J0J9h446-zt3GuQCKgBGAs/s1600/BRPARIS.png', 'none;'),
(227, 1, 0, 0, 1000, 'Torcedor Fanático do Fc Barcelona', 0, 5, 'https://3.bp.blogspot.com/-YMgXnYyxiuQ/XWRjtmJ5miI/AAAAAAABToE/7xdgUU1lI2ggdmTH-dLcVyVcELQQ8DnCwCKgBGAs/s1600/BRPARCA.png', 'none;'),
(228, 1, 0, 0, 1000, 'Torcedor Fanático do Real Madrid Club de Futból', 0, 5, 'https://2.bp.blogspot.com/-HbxnQm952sU/XWRjtjMslKI/AAAAAAABToE/CjMVFz4kgdM9O6wdHYcGspNBSe_PajGaQCKgBGAs/s1600/BRREAL.png', 'none;'),
(229, 1, 0, 0, 1000, 'Torcedor Fanático do Liverpool Football Club', 0, 5, 'https://1.bp.blogspot.com/-LSz6gAlYzHM/XWRjts5NW9I/AAAAAAABToE/YulaFB2Z5n0x0imwI1c19E6a14VoZHpWgCKgBGAs/s1600/BRLIVERPOOL.png', 'none;'),
(230, 1, 0, 0, 998, 'Chuteira de Ouro', 0, 15, 'https://4.bp.blogspot.com/-cuj0-OPyZFk/XWRjtrsAJ8I/AAAAAAABToE/8aCxaqONmKYFiFfjETc0zNijbKUDFDOoQCKgBGAs/s1600/992309726.png', 'none;'),
(231, 1, 0, 0, 999, 'Chuteira de Bronze', 0, 5, 'https://2.bp.blogspot.com/-pq4EaI_jhE4/XWRjtiChRHI/AAAAAAABToE/nhCqe2p1oooQlCHPNl35ZGbONw8ObKjigCKgBGAs/s1600/434872512.png', 'none;'),
(232, 1, 0, 0, 999, 'Chuteira de Prata', 0, 10, 'https://2.bp.blogspot.com/-BC69YhzEoJA/XWRjtq9VXeI/AAAAAAABToE/uTomoVjyClskRwW5bKXmuhMVkwwHW3_tgCKgBGAs/s1600/1366536940.png', 'none;'),
(233, 1, 0, 0, 999, 'Jogador Caro - Ninguém consegue me parar', 0, 5, 'https://4.bp.blogspot.com/-6_MtL2lrJ38/WUGllcf1zNI/AAAAAAAA4yU/ZF50SpUwaf05ck0V1eYSuJNRWWMSZkYlQCKgBGAs/s1600/ES883.gif', 'none;'),
(234, 1, 0, 0, 999, 'Caiçara - Meu estilo de vida é a Praia e meu Hobby é o Surf.', 0, 10, 'https://3.bp.blogspot.com/-pxz96lbUOXs/WHaFipEIN_I/AAAAAAAAzMw/mzwGLgOvyswKvwXni45FsY-voHBqo6KIwCPcB/s1600/IT567.gif', 'none;'),
(235, 1, 0, 0, 1000, 'Fanático por Cookie', 0, 1, 'https://1.bp.blogspot.com/-D2NKqlKmbgw/WTXS2-LdNDI/AAAAAAAA4LQ/Nk0Ri4qxoqAJZo-E4W2RA9G1UNj_oSX-gCKgB/s1600/NL542.gif', 'none;'),
(236, 1, 0, 0, 999, 'Eu sou fã número 1 do Charlie Brown Junior', 0, 5, 'https://2.bp.blogspot.com/-uMsfo3kfhOg/V1nz43H2HoI/AAAAAAAAqXo/vhXLLGCrJ2gjqJ_MiHrXtjOkdo5TY_zpwCKgB/s1600/CBJR.gif', 'none;'),
(237, 1, 0, 0, 999, 'Eu sou o Samba', 0, 1, 'https://4.bp.blogspot.com/-37rR3L1iyv0/WUolJbXUDJI/AAAAAAAA5VE/b7Fq1Iy2wSkrttbtPZfvFMXh3xADzHL7QCKgBGAs/s1600/70f9TGa.gif', 'none;'),
(238, 1, 0, 1, -1, 'Torcedor fanático do Benfica!', 0, 5, 'https://2.bp.blogspot.com/-TkGcsT1cyn0/XWRjtgkDv4I/AAAAAAABToE/HrcVpvoAKfcbSfiyPBcwzOB2vBAyidjCgCKgBGAs/s1600/BR101.gif', 'none;'),
(239, 1, 0, 1, -1, 'Arte Urbana - Arte não é crime', 0, 5, 'https://1.bp.blogspot.com/-oOtK6uVEkeg/WNrhHfJ6YgI/AAAAAAAA2KY/g1uxBmRUgRY0ioT5zqZ7LPAyx9gyJKSwACPcB/s1600/PT147.gif', 'none;'),
(240, 1, 0, 1, -1, 'Nosso professor é a Rua e nosso estilo é o Rap', 0, 10, 'https://2.bp.blogspot.com/-OgaTJLb6pqM/WsQy_tevDdI/AAAAAAABGgo/HnTIcEmPSDsynuEkKm2jnAAsLkL4lB4GQCKgBGAs/s1600/PT532.gif', 'none;'),
(241, 1, 0, 1, -1, 'Eu sou o senhor do Raio', 0, 10, 'https://4.bp.blogspot.com/-6vdqr8iOj3c/WMmMLubjLhI/AAAAAAAA1tQ/kkLvjEaIlWMIL-o16kxYwXRQmLh3mvgrACPcB/s1600/WmIAxgb.gif', 'none;'),
(242, 1, 0, 1, -1, 'Persistente e Campeão Rocky Balboa', 0, 15, 'https://4.bp.blogspot.com/-fVuFdDr4xng/WZZsBzD0ETI/AAAAAAAA7_o/Shy_WujjW5si1tzUB1MN6SXH16ejsbvewCKgBGAs/s1600/FR996.gif', 'none;'),
(243, 1, 0, 1, -1, 'Veloz como um Jato, rápido como um foguete.', 0, 5, 'https://1.bp.blogspot.com/-VQZkLHk6WQU/WUHYpfBVEYI/AAAAAAAA458/UGdh6iP7ja08aVqjLoWi4HL4GUrTiqqLgCKgBGAs/s1600/BR680.gif', 'none;'),
(244, 1, 0, 1, -1, 'Sou aluno da casa Lufa-Lufa', 0, 1, 'https://4.bp.blogspot.com/-fCCGeclrUu8/WRxZgV7E8sI/AAAAAAAA3qk/Zkh3UPNcBSs1xyZwgV9vyWQEgJoxpG5XACKgB/s1600/pYGwt9O.gif', 'none;'),
(245, 1, 0, 1, -1, 'Sou aluno da casa Corvinal', 0, 1, 'https://4.bp.blogspot.com/-jnGiHIiWjLg/WRxZgbg5V-I/AAAAAAAA3qk/mFcOnKxbw84vqFV1Tjk_iiUXyXA-RdHwQCKgB/s1600/usLPAm9.gif', 'none;'),
(246, 1, 0, 1, -1, 'Sou aluno da casa GrifinÃ³ria', 0, 1, 'https://4.bp.blogspot.com/-odk2i9glG1Y/WRxZgS6-Z6I/AAAAAAAA3qk/faXPGH4c07UlbkFG4Eu6vtXQALllPrBTACKgB/s1600/ca9dKeV.gif', 'none;'),
(247, 1, 0, 1, -1, 'Sou aluno da casa Sonserina', 0, 1, 'https://1.bp.blogspot.com/-H2RWovopGwg/WRxZgbz_7WI/AAAAAAAA3qk/t1-d2E_mRdkQoddLHQS0fsrUPiQlBDN3ACKgB/s1600/Y7HU7b5.gif', 'none;'),
(248, 1, 0, 1, -1, 'Ayrton Senna - Eu corro pela minha NaÃ§Ã£o!', 0, 10, 'https://3.bp.blogspot.com/-iKhgYkj6CS4/XzGniEeC3cI/AAAAAAABc1I/npHi3nUrx5Uy6I5v8tnbLI1uwH5EezfyACPcBGAsYHg/s1600/PT858.png', 'none;'),
(252, 1, 0, 0, 98, 'Blindado como um Tanque!', 0, 10, 'https://4.bp.blogspot.com/-b1f1wkEvI30/WU2C685s2bI/AAAAAAAA5pU/yvOQgwiz1TEUJczrNKpQ4lPXnQRNVyGcQCKgBGAs/s1600/ITB78.gif', 'none;'),
(253, 1, 0, 0, 98, 'Foguete nÃ£o tem rÃ©!', 0, 5, 'https://3.bp.blogspot.com/-VTZKOmHcmdM/VuH3WK4gojI/AAAAAAAAlSY/Is6HUEWk4nQmnMEc-sAIWd5w_IuyTCB4Q/s1600/BR815.gif', 'none;'),
(254, 2, 0, 1, -1, '1c Habbo', 0, 20, 'https://i.imgur.com/ect72XL.png', 'none;'),
(255, 2, 1, 0, 30, 'Sacola 20c Habbo', 0, 150, 'https://i.imgur.com/kadG7Ze.png', 'none;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `melhores_amigos`
--

CREATE TABLE `melhores_amigos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_de` int(11) NOT NULL,
  `id_amigo` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(250) NOT NULL,
  `data` datetime NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  `autor` varchar(250) NOT NULL,
  `autor_id` tinyint(4) NOT NULL,
  `categoria` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `media` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_avaliacoes`
--

CREATE TABLE `noticias_avaliacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `avaliacao` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias_avaliacoes`
--

INSERT INTO `noticias_avaliacoes` (`id`, `id_noticia`, `id_registro`, `nickname`, `avaliacao`) VALUES
(2, 4, 1, 'sihb', 5),
(4, 4, 3, 'sihb', 5),
(5, 4, 2, 'sihb', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_avaliacoes_comentarios`
--

CREATE TABLE `noticias_avaliacoes_comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_noticia_comentario` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias_avaliacoes_comentarios`
--

INSERT INTO `noticias_avaliacoes_comentarios` (`id`, `id_noticia_comentario`, `id_noticia`, `id_registro`, `nickname`, `tipo`) VALUES
(1, 1, 4, 1, 'majoryanzinho', 1),
(9, 1, 4, 2, 'majoryanzinho', 2),
(10, 6, 4, 2, 'sihb', 1),
(11, 7, 4, 2, 'sihb', 1),
(14, 11, 4, 2, 'sihb', 1),
(15, 10, 4, 2, 'sihb', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_categorias`
--

CREATE TABLE `noticias_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_comentarios`
--

CREATE TABLE `noticias_comentarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `comentario` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `curtidas` int(11) NOT NULL DEFAULT 0,
  `descurtidas` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_views`
--

CREATE TABLE `noticias_views` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

CREATE TABLE `notificacoes` (
  `id` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `tipo` tinyint(2) NOT NULL DEFAULT 0,
  `texto` text NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patentes`
--

CREATE TABLE `patentes` (
  `id` int(11) UNSIGNED NOT NULL,
  `ordem` tinyint(3) NOT NULL DEFAULT 0,
  `nome` varchar(250) NOT NULL,
  `executivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `patentes`
--

INSERT INTO `patentes` (`id`, `ordem`, `nome`, `executivo`) VALUES
(1, 1, 'Marechal', ''),
(2, 2, 'General de Exército', ''),
(3, 3, 'General de Divisão', ''),
(4, 4, 'General de Brigada', ''),
(5, 5, 'Coronel', ''),
(6, 6, 'Tenente-Coronel', ''),
(7, 7, 'Major', ''),
(8, 8, 'Capitão', ''),
(9, 9, 'Primeiro Tenente', ''),
(10, 10, 'Segundo Tenente', ''),
(11, 11, 'Aspirante a Oficial', ''),
(12, 12, 'Cadete', ''),
(13, 13, 'Subtenente', ''),
(14, 14, 'Primeiro Sargento', ''),
(15, 15, 'Segundo Sargento', ''),
(16, 16, 'Terceiro Sargento', ''),
(17, 17, 'Cabo', ''),
(18, 18, 'Soldado', ''),
(19, 19, 'Recruta', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_favoritos`
--

CREATE TABLE `perfil_favoritos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_registro_favorito` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil_favoritos`
--

INSERT INTO `perfil_favoritos` (`id`, `id_registro`, `id_registro_favorito`, `data`) VALUES
(1, 2, 1, '2022-03-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_mensagens`
--

CREATE TABLE `perfil_mensagens` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_registro_perfil` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `msg` varchar(350) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking_semanal`
--

CREATE TABLE `ranking_semanal` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_registro` int(11) NOT NULL,
  `posicao` int(11) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ranking_semanal`
--

INSERT INTO `ranking_semanal` (`id`, `id_registro`, `posicao`, `tipo`, `total`) VALUES
(30, 2, 1, 6, 2),
(31, 3, 2, 6, 1),
(32, 2, 1, 2, 1),
(33, 2, 1, 8, 1),
(34, 2, 1, 1, 2),
(35, 2, 1, 5, 2),
(36, 3, 2, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `avatar` varchar(550) NOT NULL DEFAULT 'https://i.imgur.com/38HBHH9.png',
  `avatar_forum` varchar(550) NOT NULL DEFAULT 'https://i.imgur.com/CT7O3o0.png',
  `descricao_forum` longtext DEFAULT NULL,
  `sexo` tinyint(1) NOT NULL DEFAULT 0,
  `nascimento` date DEFAULT NULL,
  `data_alistamento` datetime NOT NULL,
  `ultima_promocao` datetime NOT NULL,
  `promovido_por` varchar(250) NOT NULL,
  `patente_id` tinyint(2) NOT NULL DEFAULT 13,
  `status_id` tinyint(2) NOT NULL DEFAULT 1,
  `faixa` tinyint(2) NOT NULL DEFAULT 1,
  `confianca` tinyint(3) NOT NULL DEFAULT 40,
  `advs` tinyint(1) NOT NULL DEFAULT 0,
  `vip` tinyint(1) NOT NULL DEFAULT 0,
  `vip_vencimento` datetime NOT NULL,
  `moedas` int(11) NOT NULL DEFAULT 0,
  `executivo` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `nickname`, `nome`, `email`, `avatar`, `avatar_forum`, `descricao_forum`, `sexo`, `nascimento`, `data_alistamento`, `ultima_promocao`, `promovido_por`, `patente_id`, `status_id`, `faixa`, `confianca`, `advs`, `vip`, `vip_vencimento`, `moedas`, `executivo`) VALUES
(1, 'Yuri-Takahashi', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2010-07-22 00:00:00', '2010-07-22 00:00:00', 'Yuri-Takahashi', 1, 1, 1, 100, 0, 1, '2023-01-03 23:59:59', 2147444423, 0),
(2, 'Reeckt', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2021-12-27 02:34:42', '2021-12-27 21:16:22', 'Yuri-Takahashi', 2, 1, 1, 40, 0, 1, '2023-01-03 23:59:59', 21474439, 1),
(3, 'Amaral', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2022-01-11 20:03:30', '2022-01-11 15:29:09', 'Yuri-Takahashi', 2, 1, 1, 100, 0, 1, '2023-01-12 23:59:59', 21474444, 0),
(4, 'Glayve', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2021-12-26 16:47:23', '2021-12-26 16:47:23', 'Amaral', 7, 1, 1, 95, 0, 1, '2023-01-03 23:59:59', 2147444433, 0),
(5, 'Promotus', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2022-01-13 22:19:35', '2022-01-13 22:19:35', 'Amaral', 7, 1, 1, 40, 0, 0, '0000-00-00 00:00:00', 21474444, 0),
(6, 'Sly.p', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2022-01-14 16:04:36', '2022-01-14 16:04:36', 'Reeckt', 11, 1, 1, 40, 0, 0, '0000-00-00 00:00:00', 21474444, 0),
(7, 'NEWCAPMAN', NULL, NULL, 'https://i.imgur.com/38HBHH9.png', 'https://i.imgur.com/CT7O3o0.png', NULL, 0, NULL, '2022-03-05 01:17:57', '2022-03-05 01:17:57', 'Amaral', 11, 1, 1, 100, 0, 0, '2022-03-05 01:17:57', 21474444, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id` int(11) UNSIGNED NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `data` datetime NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_criador` int(11) NOT NULL,
  `responsavel_id` int(11) NOT NULL,
  `relatorio` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordem` tinyint(2) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `ordem`, `nome`) VALUES
(1, 1, 'Ativo'),
(2, 2, 'Demitido'),
(3, 3, 'Veterano'),
(4, 4, 'Conselheiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

CREATE TABLE `textos` (
  `id` int(11) UNSIGNED NOT NULL,
  `local` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT 0,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `textos`
--

INSERT INTO `textos` (`id`, `local`, `titulo`, `tipo`, `texto`) VALUES
(1, 'sobre/historia', '', 0, '<h1 style=\"text-align: center;\">Minha honra chama-se lealdade!</h1>\r\n<h1 style=\"text-align: center;\"><a href=\"https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif\" alt=\"\" width=\"58\" height=\"58\" /></a></h1>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18px;\">O Ex&eacute;rcito Alem&atilde;o foi fundado no dia 22 de Julho de 2010 pelo Marechal Yuri-Takahashi e seu Generais-Fundadores Reeckt, Victor.Anderson e Amanda513.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18px;\">Em seu primeiro ano de exist&ecirc;ncia (2010), o Ex&eacute;rcito Alem&atilde;o conseguiu in&uacute;meras conquistas e premia&ccedil;&otilde;es, dentre elas: Melhor Ex&eacute;rcito do ano;&nbsp; Melhor comandante do ano (Yuri-Takahashi); Melhor General do ano (Reeckt); Melhor Infantaria do ano (Esquadrilha da Morte).</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18px;\">O Ex&eacute;rcito Alem&atilde;o liderou ofensivas que resultaram em diversos ex&eacute;rcitos atacados apenas no primeiro ano de atividade, cravando aquilo que viria ser uma das melhores infantarias da hist&oacute;ria:<strong> A Esquadrilha da Morte.</strong><br /></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18px;\">Pelo segundo ano consecutivo, o Ex&eacute;rcito Alem&atilde;o obteve os seguintes pr&ecirc;mios:<br /><strong>Melhor comandante do ano (Yuri-Takahashi); Melhor General do ano (Reeckt); Melhor Infantaria do ano (Esquadrilha da Morte).</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18px;\">No dia 1 de Mar&ccedil;o de 2022, o General-Fundador Reeckt retorna para o seu tradicional posto de General-de-Ex&eacute;rcito. <br />O Alto-Comando da Institui&ccedil;&atilde;o passa ent&atilde;o a ser composto pela dupla: Reeckt e Amaral.</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<div class=\"message-2CShn3 cozyMessage-1DWF9U groupStart-3Mlgv1 wrapper-30-Nkg cozy-VmLDNB zalgo-26OfGz\" style=\"margin: 1.0625rem 0px 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; font-size: 16px; vertical-align: baseline; outline: 0px; position: relative; overflow-wrap: break-word; user-select: text; -webkit-box-flex: 0; flex: 0 0 auto; min-height: 2.75rem; forced-color-adjust: none; background-color: var(--background-message-hover); padding: 0.125rem 48px !important 0.125rem 72px;\" tabindex=\"-1\" role=\"article\" data-list-item-id=\"chat-messages___chat-messages-846535694968815617\" aria-setsize=\"-1\" aria-roledescription=\"Mensagem\" aria-labelledby=\"message-username-846535694968815617 uid_1 message-content-846535694968815617 uid_2 message-timestamp-846535694968815617\">\r\n<div class=\"contents-2MsGLg\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; font-size: 16px; vertical-align: baseline; outline: 0px; forced-color-adjust: none; position: static; text-indent: 0px;\">&nbsp;</div>\r\n</div>'),
(2, 'sobre/posicionamento', '', 0, ''),
(3, 'sobre/hierarquia', '', 0, '<h1 style=\"text-align: center;\">Minha honra chama-se lealdade!</h1>\r\n<h1 style=\"text-align: center;\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif\" alt=\"\" width=\"92\" height=\"92\" /></h1>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>ALTO COMANDO</strong></span></h1>\r\n<p style=\"text-align: center;\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b17114s36014s40014s43104s39114df77f17837d07b7f5dd40c69cc1901d5.gif\" alt=\"\" width=\"89\" height=\"89\" /></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 16px;\"><strong>Marechal</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 16px;\"><strong>General de Ex&eacute;rcito</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 16px;\"><strong>General de Divis&atilde;o</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 16px;\"><strong>General de Brigada</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>OFICIAIS SUPERIORES<br /></strong></span></h1>\r\n<p><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.habbo.com.br/habbo-imaging/badge/b13244s36014s40114s43104s391145bd3e15ded208af549fdb1c0f3cdacdd.gif\" alt=\"\" width=\"69\" height=\"69\" /></strong></span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 16px;\"><strong>Tenente-Coronel</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 16px;\"><strong>Major</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>OFICIAIS INTERMEDI&Aacute;RIOS<br /></strong></span></h1>\r\n<p><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.habbo.com.br/habbo-imaging/badge/b13244s36014s40114s43104s391145bd3e15ded208af549fdb1c0f3cdacdd.gif\" alt=\"\" width=\"69\" height=\"69\" /></strong></span></p>\r\n<p style=\"text-align: center;\"><strong>Capit&atilde;o</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>OFICIAIS SUBALTERNOS<br /></strong></span></h1>\r\n<p><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.habbo.com.br/habbo-imaging/badge/b13244s36014s40114s43104s391145bd3e15ded208af549fdb1c0f3cdacdd.gif\" alt=\"\" width=\"69\" height=\"69\" /></strong></span></p>\r\n<p style=\"text-align: center;\"><strong>&nbsp;Primeiro Tenente</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Segundo Tenente</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Aspirante a Oficial</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>CORPO DE PRA&Ccedil;AS<br /></strong></span></h1>\r\n<p style=\"text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.habbo.com.br/habbo-imaging/badge/b10104s42014s40014s43014s39014994c9b450a4f82efbf5afc54969682d0.gif\" alt=\"\" width=\"75\" height=\"75\" /></strong></span></p>\r\n<p style=\"text-align: center;\"><strong>Subtenente</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Primeiro Sargento</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Segundo Sargento</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Terceiro Sargento</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Cabo</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Soldado</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Recruta</strong></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>&nbsp;</strong></span></p>'),
(4, 'sobre/estatuto', '', 0, '<p><iframe src=\"https://docs.google.com/document/d/e/2PACX-1vQCFB_tgsXnwFL3bVrCnsqbMBrwNqYHzS-8XOPUxHfpG31YJEvw5UEZyqiTcIFDsRUruTSz6IRLzrkH/pub?embedded=true\" width=\"700\" height=\"1400\"></iframe></p>'),
(5, 'sobre/atos-normativos', '', 0, ''),
(6, 'servicos-externos/operacoes', '', 0, ''),
(7, 'servicos-externos/atendimento-de-ocorrencias', '', 0, ''),
(8, 'servicos-extermps/conquistas', '', 0, ''),
(9, 'departamentos/educacao-e-civismo', '', 0, ''),
(10, 'departamentos/juridico', '', 0, ''),
(11, 'departamentos/comunicacao', '', 0, ''),
(12, 'departamentos/logistica-e-rh', '', 0, ''),
(13, 'apostilas/tfpe', '', 0, '<p><iframe src=\"https://docs.google.com/document/d/e/2PACX-1vS6JnOAuIBKq4_V0me9ZtPdVL6ZCiYl_6XnX0s37hxb1jt1QS9CxRivyd0RVZ362w/pub?embedded=true\" width=\"720\" height=\"1000\"></iframe></p>'),
(14, 'apostilas/tfsa', '', 0, '<p><iframe style=\"width: 700px; height: 1000px;\" src=\"https://docs.google.com/document/d/e/2PACX-1vQbE8rfoOcYgo282uFwYrBDJGCw68qrLrSSiZ3xJsn4Syp_QIEBY-7l4VtrhZDqDQ/pub?embedded=true\" width=\"700\" height=\"1000\"></iframe></p>'),
(15, 'apostilas/tfca', '', 0, '<p><iframe style=\"width: 700px; height: 1000px;\" src=\"https://docs.google.com/document/d/e/2PACX-1vSzk76cxz34h2pTesURWlL6peegRCo2mLslMhj1GDA571JwZc-8bmyvo3AIuAZU_g/pub?embedded=true\" width=\"408\" height=\"204\"></iframe></p>'),
(16, 'apostilas/tfss', '', 0, '<p><iframe style=\"width: 700px; height: 1000px;\" src=\"https://docs.google.com/document/d/e/2PACX-1vSGE9JSAEJhaNXht7WPqF5C4kUy_ZUkNnXQhW2O8uJbJ_bLU6IEDHhQGpjoy_bWCQ/pub?embedded=true\" width=\"464\" height=\"232\"></iframe></p>'),
(17, 'apostilas/pele-e-cabelo', '', 0, ''),
(18, 'apostilas/areas-da-sede', '', 0, '<p><iframe src=\"https://docs.google.com/document/d/e/2PACX-1vS6JnOAuIBKq4_V0me9ZtPdVL6ZCiYl_6XnX0s37hxb1jt1QS9CxRivyd0RVZ362w/pub?embedded=true\" width=\"640\" height=\"1000\"></iframe></p>'),
(19, 'apostilas/discord', '', 0, '<h1 style=\"text-align: center;\">Teamspeak do Ex&eacute;rcito Alem&atilde;o</h1>\r\n<h1 style=\"text-align: center;\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif\" alt=\"\" width=\"69\" height=\"69\" /></h1>\r\n<p><br />O Teamspeak do Ex&eacute;rcito Alem&atilde;o &eacute; o principal meio de comunica&ccedil;&atilde;o de nossos membros. L&aacute; est&atilde;o presentes todos os nossos Oficiais e pra&ccedil;as.</p>\r\n<p><br />Para fazer parte, acesse o link:</p>\r\n<p>http://</p>'),
(20, 'apostilas/hb-etiqueta', '', 0, ''),
(21, 'apostilas/blacklist', '', 0, ''),
(22, 'financeiro/cargos-pagos', '', 0, '<h1 style=\"text-align: center;\">Cargos Pagos do Servi&ccedil;o Federal de Intelig&ecirc;ncia</h1>\r\n<h1 style=\"text-align: center;\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b04064t48164s11104t54114t27111892ed000acb4393c77ffd989ddb3128a.gif\" alt=\"\" width=\"39\" height=\"39\" /></h1>\r\n<p>&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>QUADRO AUXILIAR DE SUPERIORES</strong></span></h1>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<ul>\r\n<li>Delegado: 700 c&acirc;mbios<br /><br /><br /></li>\r\n<li>Superintendente: 500 c&acirc;mbios<br /><br /><br /></li>\r\n<li>Detetive: 320 c&acirc;mbios<br /><br /><br /></li>\r\n<li>Perito: 200 c&acirc;mbios<br /><br /><br /></li>\r\n<li>Escriv&atilde;o: 100 c&acirc;mbios<br /><br /></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>QUADRO AUXILIAR DE EXECUTIVOS</strong></span></h1>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<ul>\r\n<li style=\"text-align: left;\">Gestor: 50 c&acirc;mbios<br /><br /><br /></li>\r\n<li style=\"text-align: left;\">Supervisor: 30 c&acirc;mbios<br /><br /><br /></li>\r\n<li style=\"text-align: left;\">Analista: 20 c&acirc;mbios<br /><br /><br /></li>\r\n<li style=\"text-align: left;\">Assistente: 15 c&acirc;mbios<br /><br /><br /></li>\r\n<li style=\"text-align: left;\">Estagi&aacute;rio: 10 c&acirc;mbios<br /><br /><br /></li>\r\n</ul>'),
(23, 'grupos/ajudantes', '', 0, ''),
(24, 'ouvidoria', '', 0, ''),
(25, 'extras/vip', '', 0, ''),
(26, 'apostilas/como-ser-promovido', '', 0, ''),
(27, 'apostilas/fardamentos', '', 0, '<h1 style=\"text-align: center;\">Minha honra chama-se lealdade!</h1>\r\n<h1 style=\"text-align: center;\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif\" alt=\"\" width=\"83\" height=\"83\" /></h1>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>OFICIAIS</strong></span></h1>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18px;\"><strong>Alto Comando</strong></span></p>\r\n<p><span style=\"font-size: 18px;\"><strong><img style=\"float: left;\" src=\"https://i.imgur.com/FbA8I7w.png\" alt=\"\" width=\"361\" height=\"361\" /><img style=\"display: flex; float: left;\" src=\"https://i.imgur.com/1smnuFw.png\" alt=\"\" width=\"362\" height=\"362\" /></strong></span></p>\r\n<p>&nbsp;</p>'),
(28, 'apostilas/uniformes', '', 0, '<h1 style=\"text-align: center;\">Uniformes do Servi&ccedil;o Federal de Intelig&ecirc;ncia</h1>\r\n<h1 style=\"text-align: center;\"><img src=\"https://www.habbo.com.br/habbo-imaging/badge/b04064t48164s11104t54114t27111892ed000acb4393c77ffd989ddb3128a.gif\" alt=\"\" width=\"39\" height=\"39\" /></h1>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>UNIFORMES - SUPERIORES</strong></span></h1>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/UiMAFd7.png\" alt=\"\" width=\"100\" height=\"194\" /><img src=\"https://i.imgur.com/POYULGs.png\" alt=\"\" width=\"104\" height=\"193\" /><img style=\"float: right;\" src=\"https://i.imgur.com/nYqajLg.png\" alt=\"\" width=\"96\" height=\"188\" /> <img style=\"float: right;\" src=\"https://i.imgur.com/kWq0NDo.png\" alt=\"\" width=\"109\" height=\"192\" /></p>\r\n<p style=\"text-align: left;\">Delegado (N&atilde;o HC)&nbsp; &nbsp; <span style=\"float: right;\">Delegado (HC)</span></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/9KDyQJE.png\" alt=\"\" width=\"91\" height=\"193\" /><img src=\"https://i.imgur.com/LPZj30O.png\" alt=\"\" width=\"98\" height=\"190\" /><img style=\"float: right;\" src=\"https://i.imgur.com/ZqG5pja.png\" alt=\"\" width=\"96\" height=\"187\" /><img style=\"float: right;\" src=\"https://i.imgur.com/MhW1bGb.png\" alt=\"\" width=\"110\" height=\"192\" /></p>\r\n<p>Superintendente (N&atilde;o HC)&nbsp; <span style=\"float: right;\">Superintendente (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/4utSlCj.png\" alt=\"\" width=\"99\" height=\"189\" /><img src=\"https://i.imgur.com/CdmqSyt.png\" alt=\"\" width=\"97\" height=\"192\" /><img style=\"float: right;\" src=\"https://i.imgur.com/vp8Xoyf.png\" alt=\"\" width=\"100\" height=\"187\" /><img style=\"float: right;\" src=\"https://i.imgur.com/a8bshk0.png\" alt=\"\" width=\"107\" height=\"190\" /></p>\r\n<p>Detetive (N&atilde;o HC) <span style=\"float: right;\">Detetive (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/pvZMmSU.png\" alt=\"\" width=\"98\" height=\"192\" /><img src=\"https://i.imgur.com/44I0QWs.png\" alt=\"\" width=\"97\" height=\"196\" /><img style=\"float: right;\" src=\"https://i.imgur.com/4ltIMCz.png\" alt=\"\" width=\"97\" height=\"186\" /><img style=\"float: right;\" src=\"https://i.imgur.com/2DX2E2F.png\" alt=\"\" width=\"112\" height=\"187\" /></p>\r\n<p>Perito (N&atilde;o HC) <span style=\"float: right;\">Perito (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/wEowa3R.png\" alt=\"\" width=\"89\" height=\"192\" /><img src=\"https://i.imgur.com/lr7iqXM.png\" alt=\"\" width=\"96\" height=\"195\" /><img style=\"float: right;\" src=\"https://i.imgur.com/4ltIMCz.png\" alt=\"\" width=\"97\" height=\"186\" /><img style=\"float: right;\" src=\"https://i.imgur.com/DZoanw1.png\" alt=\"\" width=\"97\" height=\"184\" /></p>\r\n<p>Escriv&atilde;o (N&atilde;o HC) <span style=\"float: right;\">Escriv&atilde;o (HC)</span></p>\r\n<p><br /><br /></p>\r\n<h1 style=\"margin: 0px; font-family: Ubuntu, sans-serif; font-size: 1.231em; font-weight: 400; padding: 0px 20px; border-bottom-width: 0px; background-color: #878c4b; border-radius: 5px; height: 50px; color: #ffffff; line-height: 50px; text-align: center;\"><span style=\"color: #ffffff; font-family: Montserrat, sans-serif; font-size: 18px;\"><strong>UNIFORMES - EXECUTIVOS</strong></span></h1>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/N7LslYt.png\" alt=\"\" width=\"130\" height=\"205\" /><img src=\"https://i.imgur.com/EZ1bIDt.png\" alt=\"\" width=\"108\" height=\"188\" /><img style=\"float: right;\" src=\"https://i.imgur.com/3cQ34g5.png\" alt=\"\" width=\"120\" height=\"190\" /><img style=\"float: right;\" src=\"https://i.imgur.com/9TRY5hZ.png\" alt=\"\" width=\"124\" height=\"184\" /></p>\r\n<p>Gestor (N&atilde;o HC) <span style=\"float: right;\">Gestor (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/7m9Lv9L.png\" alt=\"\" width=\"113\" height=\"199\" /><img src=\"https://i.imgur.com/zcny9vK.png\" alt=\"\" width=\"91\" height=\"185\" /><img style=\"float: right;\" src=\"https://i.imgur.com/7Xneetb.png\" alt=\"\" width=\"120\" height=\"189\" /><img style=\"float: right;\" src=\"https://i.imgur.com/pdpxUeR.png\" alt=\"\" width=\"114\" height=\"188\" /></p>\r\n<p>Supervisor (N&atilde;o HC) <span style=\"float: right;\">Supervisor (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/QSE70uw.png\" alt=\"\" width=\"142\" height=\"200\" /><img src=\"https://i.imgur.com/XNjwSea.png\" alt=\"\" width=\"112\" height=\"192\" /><img style=\"float: right;\" src=\"https://i.imgur.com/edxFBdr.png\" alt=\"\" width=\"121\" height=\"188\" /><img style=\"float: right;\" src=\"https://i.imgur.com/LJuPiHA.png\" alt=\"\" width=\"120\" height=\"191\" /></p>\r\n<p>Analista (N&atilde;o HC) <span style=\"float: right;\">Analista (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/ilaEUzu.png\" alt=\"\" width=\"124\" height=\"200\" /><img src=\"https://i.imgur.com/zVDWKea.png\" alt=\"\" width=\"127\" height=\"192\" /><img style=\"float: right;\" src=\"https://i.imgur.com/4FxpEXv.png\" alt=\"\" width=\"118\" height=\"190\" /><img style=\"float: right;\" src=\"https://i.imgur.com/LMEXeeA.png\" alt=\"\" width=\"117\" height=\"196\" /></p>\r\n<p>Assistente (N&atilde;o HC) <span style=\"float: right;\">Assistente (HC)</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://i.imgur.com/mtxU6QT.png\" alt=\"\" width=\"107\" height=\"188\" /><img src=\"https://i.imgur.com/nfHQvJu.png\" alt=\"\" width=\"109\" height=\"194\" /><img style=\"float: right;\" src=\"https://i.imgur.com/wEWKEd0.png\" alt=\"\" width=\"122\" height=\"183\" /><img style=\"float: right;\" src=\"https://i.imgur.com/TorpqLn.png\" alt=\"\" width=\"117\" height=\"196\" /></p>\r\n<p>Estagi&aacute;rio (N&atilde;o HC) <span style=\"float: right;\">Estagi&aacute;rio (HC)</span></p>'),
(29, 'financeiro/salarios', '', 0, ''),
(30, 'financeiro/sistema-de-indicacao', '', 0, ''),
(31, 'grupos/professores', '', 0, ''),
(32, 'grupos/divulgadores', '', 0, ''),
(33, 'apostilas/tfsg', '', 0, '<p><iframe style=\"width: 700px; height: 1000px;\" src=\"https://docs.google.com/document/d/e/2PACX-1vSsuAU2O146yS3X3RjnIC6FgJnKmfIRM87FPAa6rhfVqBqCHjiCMaTzkInwRX6KDA/pub?embedded=true\" width=\"442\" height=\"221\"></iframe></p>'),
(34, 'cursos-regras', 'a', 0, ''),
(35, 'apostilas/tfte', '', 0, '<p><iframe style=\"width: 700px; height: 1000px;\" src=\"https://docs.google.com/document/d/e/2PACX-1vQqt_uApw9LlMtTRw4CmyJzP3FuTnBqY9_CgnswucPsBL54OMyQdeRccoyk5dmkaBJgGRetseUVq_zM/pub?embedded=true\" width=\"498\" height=\"249\"></iframe></p>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `adv`
--
ALTER TABLE `adv`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cartao`
--
ALTER TABLE `cartao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `confianca_voto`
--
ALTER TABLE `confianca_voto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `cursos_alunos`
--
ALTER TABLE `cursos_alunos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `cursos_area`
--
ALTER TABLE `cursos_area`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos_aulas`
--
ALTER TABLE `cursos_aulas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `cursos_historico`
--
ALTER TABLE `cursos_historico`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `cursos_modulos`
--
ALTER TABLE `cursos_modulos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `cursos_videos`
--
ALTER TABLE `cursos_videos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emblemas`
--
ALTER TABLE `emblemas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `externos`
--
ALTER TABLE `externos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `faixas`
--
ALTER TABLE `faixas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `forum_comentarios`
--
ALTER TABLE `forum_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `honrarias`
--
ALTER TABLE `honrarias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja_codigos`
--
ALTER TABLE `loja_codigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja_cods_confirm`
--
ALTER TABLE `loja_cods_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja_compras`
--
ALTER TABLE `loja_compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja_prods`
--
ALTER TABLE `loja_prods`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `melhores_amigos`
--
ALTER TABLE `melhores_amigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias_avaliacoes`
--
ALTER TABLE `noticias_avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias_avaliacoes_comentarios`
--
ALTER TABLE `noticias_avaliacoes_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias_comentarios`
--
ALTER TABLE `noticias_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias_views`
--
ALTER TABLE `noticias_views`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `patentes`
--
ALTER TABLE `patentes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil_favoritos`
--
ALTER TABLE `perfil_favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil_mensagens`
--
ALTER TABLE `perfil_mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ranking_semanal`
--
ALTER TABLE `ranking_semanal`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acesso`
--
ALTER TABLE `acesso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=902;

--
-- AUTO_INCREMENT de tabela `adv`
--
ALTER TABLE `adv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `bugs`
--
ALTER TABLE `bugs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cartao`
--
ALTER TABLE `cartao`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `confianca_voto`
--
ALTER TABLE `confianca_voto`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cursos_alunos`
--
ALTER TABLE `cursos_alunos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cursos_area`
--
ALTER TABLE `cursos_area`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cursos_aulas`
--
ALTER TABLE `cursos_aulas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cursos_historico`
--
ALTER TABLE `cursos_historico`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cursos_modulos`
--
ALTER TABLE `cursos_modulos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cursos_videos`
--
ALTER TABLE `cursos_videos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `emblemas`
--
ALTER TABLE `emblemas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `externos`
--
ALTER TABLE `externos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `faixas`
--
ALTER TABLE `faixas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `forum_comentarios`
--
ALTER TABLE `forum_comentarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `honrarias`
--
ALTER TABLE `honrarias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=619;

--
-- AUTO_INCREMENT de tabela `loja_codigos`
--
ALTER TABLE `loja_codigos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `loja_cods_confirm`
--
ALTER TABLE `loja_cods_confirm`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `loja_compras`
--
ALTER TABLE `loja_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `loja_prods`
--
ALTER TABLE `loja_prods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT de tabela `melhores_amigos`
--
ALTER TABLE `melhores_amigos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `noticias_avaliacoes`
--
ALTER TABLE `noticias_avaliacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `noticias_avaliacoes_comentarios`
--
ALTER TABLE `noticias_avaliacoes_comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `noticias_comentarios`
--
ALTER TABLE `noticias_comentarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `noticias_views`
--
ALTER TABLE `noticias_views`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `patentes`
--
ALTER TABLE `patentes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `perfil_favoritos`
--
ALTER TABLE `perfil_favoritos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perfil_mensagens`
--
ALTER TABLE `perfil_mensagens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ranking_semanal`
--
ALTER TABLE `ranking_semanal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
