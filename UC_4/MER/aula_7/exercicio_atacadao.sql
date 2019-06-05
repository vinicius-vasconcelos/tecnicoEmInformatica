CREATE SCHEMA atacadao DEFAULT CHARACTER SET utf8;
USE atacadao;

CREATE TABLE produtos (
	pro_codigo INT PRIMARY KEY AUTO_INCREMENT,
    pro_descricao VARCHAR(45),
    pro_valor DECIMAL(4,2),
    pro_quantidade INT
);

CREATE TABLE compradores (
	com_codigo INT PRIMARY KEY AUTO_INCREMENT,
    com_nome VARCHAR(45),
    com_telefone VARCHAR(11)
);

CREATE TABLE vendas (
	ven_codigo INT PRIMARY KEY AUTO_INCREMENT,
	pro_codigo INT,
    com_codigo INT,
    
    CONSTRAINT fk_PRODUTOS_VENDAS FOREIGN KEY (pro_codigo) REFERENCES  produtos (pro_codigo),
    CONSTRAINT fk_COMPRADORES_VENDAS FOREIGN KEY (com_codigo) REFERENCES  compradores (com_codigo)
);

INSERT INTO produtos VALUES (null, 'Batatão', 1.22, 3),
							(null, 'Tomatão', 10.90, 7),
                            (null, 'Bananão', 14.25, 4),
                            (null, 'Maçanzão', 4.50, 1),
                            (null, 'Feijão', 2.90, 8),
                            (null, 'Rucula', 1.50, 9),
                            (null, 'Perão', 10.15, 10),
                            (null, 'Cenorão', 5.00, 13),
                            (null, 'Almerão', 0.20, 30);

INSERT INTO compradores  VALUES (null, 'José', '999999999'),
								(null, 'Mané', '888888888'),
								(null, 'Pelé', '777777777');
                                
INSERT INTO vendas VALUES (null, 1, 1),
						  (null, 2, 2),
                          (null, 3, 3),
                          (null, 1, 2),
                          (null, 1, 3),
                          (null, 2, 1),
                          (null, 2, 3),
                          (null, 3, 1),
                          (null, 3, 2),
                          (null, 4, 1);


    create view nilo as
   
    
    SELECT * FROM produtos inner JOIN vendas inner JOIN compradores
		ON produtos.produto_pro_codigo = vendas.pro_codigo AND compradores.compra_com_codigo = vendas.com_codigo;
        

        
SELECT * FROM rel;
    
    
    
    
    
    
    
    
    
    