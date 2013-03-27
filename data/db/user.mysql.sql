SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT=0;
START TRANSACTION;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `role` varchar(8) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `role`, `email`, `pass`, `firstname`, `lastname`) VALUES
(1, 'admin', 'luigi@luigis-pizza.de', '$2a$12$ZTRhelntgdGRJcGSOHsye.YHJkVFof6aVqZqoE8EGKK2KVqSQCapy','Luigi','Bartoli'),
(2, 'staff', 'francesca@luigis-pizza.de', '$2a$12$e5Jjk41RuYDKNnEmUTVsBu1bl7sShfBO4QF940dCDLSueCdmoF1ha','Francesca','Bartoli'),
(3, 'staff', 'alessandro@luigis-pizza.de', '$2a$12$VvZeVBHEC2GvLU1hyw2WouMZMPuKXBdT.Cyj9UK6KfUwXWwVDREsK','Alessandro','Altobelli'),
(4, 'staff', 'valentina@luigis-pizza.de', '$2a$12$qMVzu3RlIzBhS7EaHUQzLeQF0/wYeMJ360SQBoKSfsJl0kAA1P55C','Valentina','Rossi');

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
