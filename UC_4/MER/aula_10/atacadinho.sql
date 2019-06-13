USE atacadinho;

/* trigger para estornar quantidade para os produtos*/
DELIMITER !@
CREATE TRIGGER estorno 
	BEFORE DELETE ON vendas
    FOR EACH ROW BEGIN
		UPDATE produtos SET produtos.pro_qtd = produtos.pro_qtd + old.ven_qtd
					WHERE old.pro_codigo = pro_codigo;
    END !@ ; 
DELIMITER !@ ;


DELETE FROM vendas WHERE ven_codigo = 6;