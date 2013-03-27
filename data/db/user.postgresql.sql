DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id integer NOT NULL,
  role varchar(8) DEFAULT NULL,
  email varchar(128) DEFAULT NULL,
  pass varchar(60) DEFAULT NULL,
  firstname varchar(32) DEFAULT NULL,
  lastname varchar(32) DEFAULT NULL,
  
  CONSTRAINT users_id PRIMARY KEY(id)
);

INSERT INTO users VALUES (1,'admin', 'luigi@luigis-pizza.de','$2a$12$ZTRhelntgdGRJcGSOHsye.YHJkVFof6aVqZqoE8EGKK2KVqSQCapy','Luigi','Bartoli');
INSERT INTO users VALUES (2,'staff', 'francesca@luigis-pizza.de','$2a$12$e5Jjk41RuYDKNnEmUTVsBu1bl7sShfBO4QF940dCDLSueCdmoF1ha','Francesca','Bartoli');
INSERT INTO users VALUES (3,'staff', 'alessandro@luigis-pizza.de','$2a$12$VvZeVBHEC2GvLU1hyw2WouMZMPuKXBdT.Cyj9UK6KfUwXWwVDREsK','Alessandro','Altobelli');
INSERT INTO users VALUES (4,'staff', 'valentina@luigis-pizza.de','$2a$12$qMVzu3RlIzBhS7EaHUQzLeQF0/wYeMJ360SQBoKSfsJl0kAA1P55C','Valentina','Rossi');
