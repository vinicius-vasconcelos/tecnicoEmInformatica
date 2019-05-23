/*CREATE DATABASE cadclientes;
USE cadclientes;*/
SET SQL_SAFE_UPDATES=0;

SELECT * FROM pessoas;
SELECT * FROM pessoas where nome LIKE 'D%';
SELECT * FROM pessoas where telefone LIKE '18%';
SELECT COUNT(*) as quantidade FROM pessoas;
SELECT nome, telefone FROM pessoas;
SELECT nome, dt_nasc FROM pessoas ORDER BY nome DESC LIMIT 10;

UPDATE pessoas set dt_nasc = '2019-05-22' WHERE id_cadCliente = 1;
UPDATE pessoas set nome = 'Joselito', email = 'joselito@hotmilf.com' WHERE id_cadCliente = 2 OR id_cadCliente = 14;
UPDATE pessoas set nome = 'Karoline' WHERE nome = 'Karol';

SELECT * FROM pessoas WHERE dt_nasc = CURDATE();

DELETE FROM pessoas WHERE id_cadcliente = 24 OR id_cadcliente = 13;

INSERT INTO pessoas values(null, 'Carlos', 'carlinhos@hotmilf.com', '(18)9976011', '2000-07-26');

/*TRUNCATE TABLE pessoas;*/
