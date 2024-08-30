CREATE TABLE IF NOT EXISTS `usuarios` (  
`id` int(11) NOT NULL AUTO_INCREMENT,  
`nome` varchar(220) NOT NULL, 
`telefone`INT NOT NULL, 
`email` varchar(520) NOT NULL,  
`senha` varchar(10) NOT NULL,
`situacoe_id` int(11) NOT NULL DEFAULT '0',
`niveis_acesso_id` int(11) NOT NULL,  
`created` datetime NOT NULL,  
`modified` datetime DEFAULT NULL,  
PRIMARY KEY (`id`)
)