CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;