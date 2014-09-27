CREATE DATABASE inglespa_db;
USE inglespa_db;
CREATE TABLE questions (
id INT NOT NULL AUTO_INCREMENT,
qtext1 VARCHAR(200), 
qtext2 VARCHAR(200),
answ1 VARCHAR(200),
answ2 VARCHAR(200),
hint VARCHAR(200),
PRIMARY KEY (id)
) CHARACTER SET utf8;
	
CREATE TABLE tenses (
id INT NOT NULL AUTO_INCREMENT,
tensename VARCHAR(200),
PRIMARY KEY (id)
);

INSERT INTO tenses (tensename)
VALUES ('Present Perfect Simple');

INSERT INTO sentences (spanish_sen, trans_1, trans_2, hint_1, hint_2)
VALUES ('This is a test', 'Esto es un test', 'Esto es una prueba', 'Pista 1', 'pista 2');

DROP TABLE sentences;
SELECT spanish_sen FROM sentences WHERE id=86;
SELECT * FROM questions;

DELETE FROM sentences;
DELETE FROM tenses WHERE tensename='Present Perfect Simple';

ALTER TABLE sentences CHARACTER SET utf8;

INSERT INTO sentences (spanish_sen) VALUE ('ñ');
DROP DATABASE inglespa_db;