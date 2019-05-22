CREATE DATABASE quitanda;
use quitanda;

/*----------------------------------------------------------------------------------------------------------------------------------*/

CREATE TABLE legumes (
	leg_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    leg_tipo VARCHAR(45) NOT NULL,
    leg_qtde INT
) ENGINE = InnoDB DEFAULT CHARACTER SET = 'latin1';

CREATE TABLE frutas (
	fru_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fru_tipo VARCHAR(45) NOT NULL,
    fru_qtde INT
) ENGINE = InnoDB DEFAULT CHARACTER SET = 'latin1';

CREATE TABLE verduras (
	ver_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ver_tipo VARCHAR(45) NOT NULL,
    ver_qtde INT
) ENGINE = InnoDB DEFAULT CHARACTER SET = 'latin1';

INSERT INTO  legumes (leg_tipo, leg_qtde) VALUES ('Xuxu', 15);
INSERT INTO  legumes (leg_tipo, leg_qtde) VALUES ('Xuxa', 16);
INSERT INTO  legumes (leg_tipo, leg_qtde) VALUES ('Xuxi', 17);
INSERT INTO  legumes VALUES(null,'Macarrão', 25),
							(null,'Bobão', 24),
							(null,'Rodrigo Pimpão', 99);

INSERT INTO frutas (fru_tipo, fru_qtde) VALUES ('TOMATE', 16);
INSERT INTO frutas (fru_tipo, fru_qtde) VALUES ('TOMATA', 17);
INSERT INTO frutas (fru_tipo, fru_qtde) VALUES ('TOMATI', 18);
INSERT INTO frutas VALUES (null, 'Banana', 1),
						  (null,'Legume', 8),
                          (null, 'Faraó', 56);

INSERT INTO verduras (ver_tipo, ver_qtde) VALUES ('Alface', 10), 
												 ('Almerão', 12),
                                                 ('Rúcula', 7),
                                                 ('Espináfre', 9),
                                                 ('Agrião', 8),
                                                 ('Agriinho', 1);
/*----------------------------------------------------------------------------------------------------------------------------------*/

CREATE TABLE queijos_especiais (
	que_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    que_tipo VARCHAR(45) NOT NULL,
    que_qtde INT,
    que_valor DECIMAL(4,2),
    que_regiao VARCHAR(45)
) ENGINE = InnoDB DEFAULT CHARACTER SET = 'latin1';

INSERT INTO queijos_especiais VALUES (null, 'Queijo lerdoso', 10, 4.00, 'Bahia'), 
									 (null, 'Queijo furado', 12, 99.00, 'Rio de Janeiro'),
									 (null, 'Queijo Gay', 7, 24.00, 'Rio Grande do Sul'),
									 (null, 'Queijo Alien', 9, 1.00, 'Acre'),
									 (null, 'Queijo Sertanejo', 8, 10.00, 'Goias');
                                     
CREATE TABLE salames (
	sal_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sal_tipo VARCHAR(45) NOT NULL,
    sal_qtde INT,
    sal_valor DECIMAL(4,2)
) ENGINE = InnoDB DEFAULT CHARACTER SET = 'latin1';

INSERT INTO salames VALUES (null, 'Salame Japoneis', 10, 5.00), 
						   (null, 'Salame Africano', 12, 35.00),
						   (null, 'Salame Brasileiro', 7, 12.00),
						   (null, 'Salame nordestino', 9, 1.00);

/*----------------------------------------------------------------------------------------------------------------------------------*/
SELECT * FROM frutas;
	SELECT COUNT(*) as Quantidade FROM frutas;

SELECT * FROM legumes;
	SELECT COUNT(*) as Quantidade FROM legumes;
    SELECT * FROM legumes ORDER BY leg_tipo;
    SELECT * FROM legumes ORDER BY leg_tipo DESC;

SELECT * FROM verduras;
	SELECT COUNT(*) as Quantidade FROM verduras;
    SELECT * FROM verduras WHERE ver_tipo LIKE '%Ag%';

SELECT * FROM queijos_especiais;
	SELECT que_tipo, que_valor FROM queijos_especiais;
    SELECT * FROM queijos_especiais WHERE que_valor < 100.00;
    
SELECT * FROM salames;






















                                                 
