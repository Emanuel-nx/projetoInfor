-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela projetoinfor.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `rg`, `endereco`, `numero`, `estado`, `cidade`, `renda`, `usuario_id`, `created`, `status`) VALUES
	(1, 'Emanuel N Xavier', '045.517.683-32', NULL, 'Quadra 15 Lote 11 Ca', NULL, '', 'Teresina', 0000000000000000000000, 0, '0000-00-00', 1),
	(3, 'Emanuel', '986.345.221-34', NULL, 'Quadra 15 Lote 11 Ca', NULL, 'Piauí', 'Teresina', 000000000000000023.566, NULL, NULL, 1),
	(4, 'Caixa CC', '045.517.683-32', NULL, 'Quadra 15 Lote 11 Ca', NULL, 'Piauí', 'Teresina', 000000000000000023.566, NULL, NULL, 0);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando dados para a tabela projetoinfor.produtos: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `descricao`, `detalhamento`, `preco_vista`, `preco_prazo`, `codigo_barras`, `usuarios_id`, `created`, `status`) VALUES
	(7, 'Celular', 'S9', 7444, 9, 93464600, 2, '2018-08-02', 1),
	(8, 'Celular', 'S9', 7456, 9, 93464600, 2, '2018-08-02', 1),
	(9, 'Celular', 'S9', 6.5, 8.8, 93464600, 2, '2018-08-02', 1),
	(10, 'Celular', 'S9', 6.5, 8.8, 93464600, 2, '2018-08-02', 1),
	(13, 'Computador', 'Notebook Lenovo Core i5', 2089, 2089, 0, 0, '0000-00-00', 0),
	(14, 'Computador', 'Notebook ASUS Core i3', 2089.35, 2445.27, 0, 0, '0000-00-00', 0),
	(15, 'Computador', 'Notebook ASUS Core i3', 2089.35, 2445.27, 0, 0, '0000-00-00', 0),
	(16, 'Computador', 'Notebook ASUS', 2089.34, 3003.23, 0, 0, '0000-00-00', 0),
	(18, 'eu', '', 0, 0, 0, 0, '0000-00-00', 0),
	(20, 'Testado', 'isso', 20, 29, 0, 0, '0000-00-00', 0),
	(21, 'Iphone 6s', '16Gb Rosé', 1350.34, 1405, 0, 0, '0000-00-00', 1),
	(22, 'Iphone x', 'com capa e pelicula', 8000, 8.05, 0, 0, '0000-00-00', 0);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando dados para a tabela projetoinfor.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
