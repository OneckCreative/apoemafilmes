-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26/02/2019 às 18:31
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

--
-- Banco de dados: `oneckcom_cms`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aboutus`
--

CREATE TABLE `aboutus` (
  `heading` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `aboutus`
--

INSERT INTO `aboutus` (`heading`, `content`) VALUES
('Somos a Apoema filmes', '<h4>Apoema &eacute; um nome de origem tupi-guarani que significa \"Aquele que enxerga al&eacute;m\"</h4>\r\n<p>A Apoema Filmes &eacute; uma empresa que procura sempre estar a frente <br /> visando as novas tend&ecirc;ncias da comunica&ccedil;&atilde;o. <br />Trabalhamos com equipamentos de alta tecnologia e com equipe altamente qualificada, <br /> com olhar inovador e conceito cinematogr&aacute;fico.</p>\r\n<p>Somos absolutamente apaixonados pelo que fazemos. Trabalhamos com sentimento e eternizamos o momento <br /> transformando seu v&iacute;deo em uma envolvente e impactante experi&ecirc;ncia cinematogr&aacute;fica.</p>'),
('72', ''),
('73', ''),
('74', ''),
('75', ''),
('76', ''),
('77', ''),
('78', ''),
('79', ''),
('80', ''),
('81', ''),
('82', ''),
('83', ''),
('84', ''),
('85', ''),
('86', ''),
('87', ''),
('88', ''),
('89', ''),
('90', ''),
('91', ''),
('92', ''),
('93', ''),
('94', ''),
('95', ''),
('96', ''),
('97', ''),
('98', ''),
('99', ''),
('100', ''),
('101', ''),
('102', ''),
('103', ''),
('104', ''),
('105', ''),
('106', ''),
('107', ''),
('108', ''),
('109', ''),
('110', ''),
('111', ''),
('112', ''),
('113', ''),
('114', ''),
('115', ''),
('116', ''),
('117', ''),
('118', ''),
('119', ''),
('120', ''),
('121', ''),
('122', ''),
('123', ''),
('124', ''),
('125', ''),
('126', ''),
('127', ''),
('128', ''),
('129', ''),
('130', ''),
('131', ''),
('132', ''),
('133', ''),
('134', ''),
('135', ''),
('136', ''),
('137', ''),
('138', ''),
('139', ''),
('140', ''),
('141', ''),
('142', ''),
('143', ''),
('144', ''),
('145', ''),
('146', ''),
('147', ''),
('148', ''),
('149', ''),
('150', ''),
('151', ''),
('152', ''),
('153', ''),
('154', ''),
('155', ''),
('156', ''),
('157', ''),
('158', ''),
('159', ''),
('160', ''),
('161', ''),
('162', ''),
('163', ''),
('164', ''),
('165', ''),
('166', ''),
('167', ''),
('168', ''),
('169', ''),
('170', ''),
('171', ''),
('172', ''),
('173', ''),
('174', ''),
('175', ''),
('176', ''),
('177', ''),
('178', ''),
('179', ''),
('180', ''),
('181', ''),
('182', ''),
('183', ''),
('184', ''),
('185', ''),
('186', ''),
('187', ''),
('188', ''),
('189', ''),
('190', ''),
('191', ''),
('192', ''),
('193', ''),
('194', ''),
('195', ''),
('196', ''),
('197', ''),
('198', ''),
('199', ''),
('200', ''),
('201', ''),
('202', ''),
('203', ''),
('204', ''),
('205', ''),
('206', ''),
('207', ''),
('208', ''),
('209', ''),
('210', ''),
('211', ''),
('212', ''),
('213', ''),
('214', ''),
('215', ''),
('216', ''),
('217', ''),
('218', ''),
('219', ''),
('220', ''),
('221', ''),
('222', ''),
('223', ''),
('224', ''),
('225', ''),
('226', ''),
('227', ''),
('228', ''),
('229', ''),
('230', ''),
('231', ''),
('232', ''),
('233', ''),
('234', ''),
('235', ''),
('236', ''),
('237', ''),
('238', ''),
('239', ''),
('240', ''),
('241', ''),
('242', ''),
('243', ''),
('244', ''),
('245', ''),
('246', ''),
('247', ''),
('248', ''),
('249', ''),
('250', ''),
('251', ''),
('252', ''),
('253', ''),
('254', ''),
('255', ''),
('256', ''),
('257', ''),
('258', ''),
('259', ''),
('260', ''),
('261', ''),
('262', ''),
('263', ''),
('264', ''),
('265', ''),
('266', ''),
('267', ''),
('268', ''),
('269', ''),
('270', ''),
('271', ''),
('272', ''),
('273', ''),
('274', ''),
('275', ''),
('276', ''),
('277', ''),
('278', ''),
('279', ''),
('280', ''),
('281', ''),
('282', ''),
('283', ''),
('284', ''),
('285', ''),
('286', ''),
('287', ''),
('288', ''),
('289', ''),
('290', ''),
('291', ''),
('292', ''),
('293', ''),
('294', ''),
('295', ''),
('296', ''),
('297', ''),
('298', ''),
('299', ''),
('300', ''),
('301', ''),
('302', ''),
('303', ''),
('304', ''),
('305', ''),
('306', ''),
('307', ''),
('308', ''),
('309', ''),
('310', ''),
('311', ''),
('312', ''),
('313', ''),
('314', ''),
('315', ''),
('316', ''),
('317', ''),
('318', ''),
('319', ''),
('320', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contactus`
--

CREATE TABLE `contactus` (
  `heading` text NOT NULL,
  `email` text NOT NULL,
  `sendtoemail` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `phone` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `contactus`
--

INSERT INTO `contactus` (`heading`, `email`, `sendtoemail`, `address`, `city`, `state`, `zipcode`, `phone`, `description`) VALUES
('Fale Conosco', 'contato@apoemafilmes.com.br', 'contato@apoemafilmes.com.br', '', '', '', '', '11 4329-8123 / 11 94890-6751', '<p>A Apoema est&aacute; disposta a te ajudar! <br /> Mande um email para nossa central de relacionamento <br /> Solicite um or&ccedil;amento sem compromisso, tire suas d&uacute;vidas ou mande sua opii&atilde;o</p>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `footer`
--

CREATE TABLE `footer` (
  `heading` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `footer`
--

INSERT INTO `footer` (`heading`, `content`) VALUES
('Bloco 03', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `landing`
--

CREATE TABLE `landing` (
  `heading` text NOT NULL,
  `introtext` text NOT NULL,
  `skills` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `landing`
--

INSERT INTO `landing` (`heading`, `introtext`, `skills`, `image`) VALUES
('Profissionais', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `idyoutube` tinytext NOT NULL,
  `category` tinytext NOT NULL,
  `thumbnail` text NOT NULL,
  `content` text NOT NULL,
  `active` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `pages`
--

INSERT INTO `pages` (`id`, `title`, `idyoutube`, `category`, `thumbnail`, `content`, `active`, `datetime`) VALUES
(29, 'Cena ', '317770729', 'filmes', '', '<p><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\">Cena \"Terra de ningu&eacute;m\" | Mulher Maravilha (2017) Informa&ccedil;&atilde;o do filme: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=http%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt0451279%2F&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">http://www.imdb.com/title/tt0451279/</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> Compre em Blu-ray: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.amazon.com%2FWonder-Woman-Blu-ray-Gal-Gadot%2Fdp%2FB0714QRG4Z&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://www.amazon.com/Wonder-Woman-B...</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> Estrelando: Gal Gadot, Chris Pine, Robin Wright, Danny Huston, David Thewlis, Nielsen Connie, Elena Anaya, Lucy Davis, Bremner Ewen, Disse Taghmaoui, Eugene Brave Rock -------------------------------------------------- ? Twitter: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Ftwitter.com%2Ffilmicbox&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://twitter.com/filmicbox</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Facebook: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.facebook.com%2Ffilmicbox&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://www.facebook.com/filmicbox</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Instagram: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.instagram.com%2Ffilmicbox&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://www.instagram.com/filmicbox</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Google+: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fplus.google.com%2F109939716731213840534&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://plus.google.com/1099397167312...</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Scopian01: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fgoo.gl%2Fj0WzB2&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://goo.gl/j0WzB2</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> -------------------------------------------------- *** TM &amp; &copy; Warner Bros. (2017) Rentabilizado pelo propriet&aacute;rio / s. Seus an&uacute;ncios Isen&ccedil;&atilde;o de responsabilidade de direitos autorais De acordo com a Se&ccedil;&atilde;o 107 da Lei de Direitos Autorais de 1976, o subs&iacute;dio &eacute; feito para \"uso aceit&aacute;vel\" para fins de cr&iacute;tica, coment&aacute;rios, not&iacute;cias, ensino, bolsas de estudo e pesquisa. O uso aceit&aacute;vel &eacute; um uso permitido pela lei de direitos autorais que, de outra forma, poderia estar infringindo. O uso sem fins lucrativos, educacional ou pessoal sugere o equil&iacute;brio em favor do uso justo. N&atilde;o h&aacute; inten&ccedil;&atilde;o de infringir direitos de autoria. ***</span></p>', 1, '2019-02-20 20:28:42'),
(37, 'Cena ', 'MlwHKphUU_Y', 'filmes', '', '<p><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\">Cena \"Terra de ningu&eacute;m\" | Mulher Maravilha (2017) Informa&ccedil;&atilde;o do filme: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=http%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt0451279%2F&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">http://www.imdb.com/title/tt0451279/</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> Compre em Blu-ray: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.amazon.com%2FWonder-Woman-Blu-ray-Gal-Gadot%2Fdp%2FB0714QRG4Z&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://www.amazon.com/Wonder-Woman-B...</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> Estrelando: Gal Gadot, Chris Pine, Robin Wright, Danny Huston, David Thewlis, Nielsen Connie, Elena Anaya, Lucy Davis, Bremner Ewen, Disse Taghmaoui, Eugene Brave Rock -------------------------------------------------- ? Twitter: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Ftwitter.com%2Ffilmicbox&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://twitter.com/filmicbox</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Facebook: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.facebook.com%2Ffilmicbox&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://www.facebook.com/filmicbox</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Instagram: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fwww.instagram.com%2Ffilmicbox&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://www.instagram.com/filmicbox</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Google+: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fplus.google.com%2F109939716731213840534&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://plus.google.com/1099397167312...</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> ? Scopian01: </span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"text-decoration-line: none; display: inline-block; cursor: pointer; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=https%3A%2F%2Fgoo.gl%2Fj0WzB2&amp;v=MlwHKphUU_Y&amp;redir_token=JQdy73_ErKXWt941oDgxVpjWLep8MTU1MDY2ODk2NEAxNTUwNTgyNTY0&amp;event=video_description\" target=\"_blank\" rel=\"nofollow\">https://goo.gl/j0WzB2</a><span style=\"color: #0a0a0a; font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\"> -------------------------------------------------- *** TM &amp; &copy; Warner Bros. (2017) Rentabilizado pelo propriet&aacute;rio / s. Seus an&uacute;ncios Isen&ccedil;&atilde;o de responsabilidade de direitos autorais De acordo com a Se&ccedil;&atilde;o 107 da Lei de Direitos Autorais de 1976, o subs&iacute;dio &eacute; feito para \"uso aceit&aacute;vel\" para fins de cr&iacute;tica, coment&aacute;rios, not&iacute;cias, ensino, bolsas de estudo e pesquisa. O uso aceit&aacute;vel &eacute; um uso permitido pela lei de direitos autorais que, de outra forma, poderia estar infringindo. O uso sem fins lucrativos, educacional ou pessoal sugere o equil&iacute;brio em favor do uso justo. N&atilde;o h&aacute; inten&ccedil;&atilde;o de infringir direitos de autoria. ***</span></p>', 0, '2019-02-20 20:52:43'),
(38, 'A Dream of Myanmar', '319459960', 'filmes', '1.jpg', '<p>sdfvgsdfgsd</p>', 1, '2019-02-26 22:25:55'),
(39, 'Testando vimeo', '25967822', 'filmes', '', '', 1, '2019-02-20 20:52:31'),
(40, 'sdfdsf', '315632203', '360', '', '', 1, '2019-02-20 20:51:27'),
(41, 'Testando 33', '318971562', 'videoclips', '1.jpg', '', 1, '2019-02-27 01:05:14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `setup`
--

CREATE TABLE `setup` (
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `headercode` text NOT NULL,
  `author` text NOT NULL,
  `googleanalytics` text NOT NULL,
  `tinymce` int(11) NOT NULL,
  `portfolioheading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `setup`
--

INSERT INTO `setup` (`title`, `keywords`, `description`, `headercode`, `author`, `googleanalytics`, `tinymce`, `portfolioheading`) VALUES
('Apoema Filmes', 'Apoema Filmes, penha, são paulo, produção de vídeo, album de fotos, comerciais, feira, eventos, video aula, carrão, tatuapé', 'Somos a apoema filmes, o nomeé de origem tupi-guarani que significa aquele que enxerga além a apoema filmes é uma empresa que procura sempre estar a frente  visando as novas tendências da comunicação.  Trabalhamos com equipamentos de alta tecnologia e com equipe altamente qualificada,  com olhar inovador e conceito cinematográfico.  Somos absolutamente apaixonados pelo que fazemos. Trabalhamos com sentimento e eternizamos o momento  transformando seu vídeo em uma envolvente e impactante experiência cinematográfica.', '', 'Oneck Creative', '', 1, 'Nossos trabalhos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `slider`
--

CREATE TABLE `slider` (
  `urlbg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1span` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2span` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h3span` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `botao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urllink` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `slider`
--

INSERT INTO `slider` (`urlbg`, `heading`, `h1span`, `h2span`, `h3span`, `botao`, `h1`, `h2`, `h3`, `p1`, `p2`, `p3`, `urllink`) VALUES
('319200353', 'Slideshow home', 'Apoema filmes', 'Além', 'Criatividade', 'Testando título do botão 5', 'Seja bem vindo', 'Enxergamos', 'Use nossa', 'Conheça mais sobre nós', 'Publicidade - Corporativo - Eventos sociais - Videoclipes', 'Veja nossos trabalhos', '318971562');

-- --------------------------------------------------------

--
-- Estrutura para tabela `socialmedia`
--

CREATE TABLE `socialmedia` (
  `heading` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `github` text NOT NULL,
  `google` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `socialmedia`
--

INSERT INTO `socialmedia` (`heading`, `facebook`, `twitter`, `github`, `google`, `linkedin`) VALUES
('Redes sociais', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('admin', '*E6479360703BA73190715AA0275453432FA4D0F5', 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
