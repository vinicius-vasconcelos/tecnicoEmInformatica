CREATE DATABASE IF NOT EXISTS atacadinho; -- criando uma base de dados nova chamada "atacadinho" caso ela  não existe
USE atacadinho; -- utilizando a base de dados

CREATE TABLE compradores ( -- criando uma tabela chamada "compradores"
	com_codigo INT(11) NOT NULL, -- criando um atributo código do tipo inteiro que não pode ser nulo
    com_nome VARCHAR(45) NOT NULL, -- criando um atributo nome do tipo string que não pode ser nulo
    com_cpf CHAR(11) NOT NULL, -- criando um atributo cpf do tipo string que não pode ser nulo
    com_email VARCHAR(99) NOT NULL -- criando um atributo email do tipo inteiro que não pode ser nulo
) ENGINE = InnoDB DEFAULT CHARSET=utf8; -- definindo a linguagem da tabela

CREATE TABLE produtos ( -- criando uma tabela chamada "produtos"
	pro_codigo INT(11) NOT NULL, -- criando um atributo código do tipo inteiro que não pode ser nulo
    pro_nome VARCHAR(45) NOT NULL, -- criando um atributo nome do tipo string que não pode ser nulo
    pro_qtd INT(11) NOT NULL, -- criando um atributo quantidade do tipo inteiro que não pode ser nulo
    pro_valor FLOAT NOT NULL -- criando um atributo valor do tipo decimal que não pode ser nulo
) ENGINE = InnoDB DEFAULT CHARSET=utf8; -- definindo a linguagem da tabela


CREATE TABLE vendas ( -- criando uma tabela chamada "vendas"
	ven_codigo INT(11) NOT NULL, -- criando um atributo código do tipo inteiro que não pode ser nulo
    com_codigo INT(11) NOT NULL, -- criando um atributo código dos compradores do tipo inteiro que não pode ser nulo (atrelando a tabela de "compradores")
    pro_codigo INT(11) NOT NULL, -- criando um atributo código dos produtos do tipo inteiro que não pode ser nulo (atrelando a tabela de "produtos")
    ven_qtd INT(11) NOT NULL -- criando um atributo quantidade do tipo inteiro que não pode ser nulo
)ENGINE = InnoDB DEFAULT CHARSET=utf8; -- definindo a linguagem da tabela

ALTER TABLE compradores ADD PRIMARY KEY (com_codigo); -- alterando a tabela de compradores e adicionando uma chave primária

ALTER TABLE produtos ADD PRIMARY KEY (pro_codigo); -- alterando a tabela de produtos e adicionando uma chave primária

ALTER TABLE vendas ADD PRIMARY KEY (ven_codigo) , -- alterando tabela de vendas e criando uma chave primárias
				   ADD KEY FK_VENDAS_PRODUTOS (pro_codigo), -- criando chave estrangeira de produtos em vendas 
                   ADD KEY FK_VENDAS_COMPRADORES (com_codigo); -- criando chave estrangeira de compradores em vendas
 
ALTER TABLE compradores
	MODIFY com_codigo INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 0; -- alterando tabela de compradores e tornando chave primária auto incermento que se inicia de 0
    
ALTER TABLE produtos
	MODIFY pro_codigo INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 0; -- alterando tabela de produtos e tornando chave primária auto incermento que se inicia de 0
    
ALTER TABLE vendas
	MODIFY ven_codigo INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 0; -- alterando tabela de vendas e tornando chave primária auto incremento que se inicia de 0
    
-- inserindo 6 compradores
INSERT INTO compradores VALUES (null, 'Vinisão', '40197767842', 'viniciussouzav@gmail.com'), 
								(null, 'Pedrão', '40298878943', 'pedrao@gmail.com'),
                                (null, 'Carlão', '40399912344', 'carlao@gmail.com'),
                                (null, 'Eduzão', '40400012355', 'eduzao@gmail.com'),
                                (null, 'Hermilão', '40511112366', 'hermilao@gmail.com'),
                                (null, 'jão', '40833312388', 'jao@gmail.com');
                                
                                
-- inserindo 5 produtos
INSERT INTO produtos VALUES (null, 'Cenorão', 10, 1.99),
								(null, 'Batatão', 15, 2.50),
                                (null, 'Almerão', 50, 5.00),
                                (null, 'Jamelão', 10, 20.00),
                                (null, 'Pastelão', 2, 5.50);


-- inserindo 4 vendas
INSERT INTO vendas VALUES (null, 1, 1, 1),
							(null, 2, 2, 1),
                            (null, 3, 3, 1),
                            (null, 4, 4, 1);


CREATE VIEW relatorio AS 
	SELECT ven_codigo, pro_nome, pro_qtd, pro_valor, ven_qtd, com_nome, com_email, com_cpf FROM vendas JOIN produtos join compradores
		ON vendas.pro_codigo = produtos.pro_codigo AND vendas.com_codigo = compradores.com_codigo;
        
SELECT * FROM relatorio;

/* procedure para verificar quantidade*/
DELIMITER $$
CREATE PROCEDURE verifica (comp INT, prod INT, newQuant INT)
	BEGIN
		DECLARE quant INT;
		SELECT pro_qtd INTO quant FROM produtos WHERE produtos.pro_codigo = prod; 
        
        IF quant - newQuant > 0 THEN
			INSERT INTO vendas VALUES (null, comp, prod, newQuant);
        END IF;
	END $$;
DELIMITER $$

/* trigger para atualizar o estoque*/
DELIMITER $$;
CREATE TRIGGER reduzqtd
	AFTER INSERT ON vendas
    FOR EACH ROW 
    BEGIN
		DECLARE quant INT;
		SELECT pro_qtd INTO quant FROM produtos WHERE produtos.pro_codigo = new.pro_codigo;
		
			IF quant - new.ven_qtd > 0 THEN
				UPDATE produtos SET produtos.pro_qtd = produtos.pro_qtd - new.ven_qtd
					WHERE new.pro_codigo = pro_codigo;
			END IF;
	END;
DELIMITER $$;


CALL verifica(1, 1, 9);

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                