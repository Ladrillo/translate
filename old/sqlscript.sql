CREATE DATABASE transdb;
USE transdb;
CREATE TABLE sentences (
id INT NOT NULL AUTO_INCREMENT,
spanish_sen VARCHAR(200), 
trans_1 VARCHAR(200),
trans_2 VARCHAR(200),
hint_1 VARCHAR(300),
hint_2 VARCHAR(300),
PRIMARY KEY (id)
);
	
INSERT INTO sentences (spanish_sen, trans_1, trans_2, hint_1, hint_2)
VALUES ('This is a test', 'Esto es un test', 'Esto es una prueba', 'Pista 1', 'pista 2');

DROP TABLE sentences;
SELECT * FROM sentences;
DELETE FROM sentences;

ALTER TABLE sentences CHARACTER SET utf8;

INSERT INTO sentences (spanish_sen) VALUE ('ñ');