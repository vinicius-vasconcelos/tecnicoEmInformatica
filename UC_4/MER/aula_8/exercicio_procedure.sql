USE sala;

/*Procedimentos (procedure)*/
delimiter $
	CREATE PROCEDURE buscanome (varnome varchar(10))
		BEGIN
			SELECT CONCAT('O nome dele(a) é: ', alu_nome), alu_telefone FROM alunos
				WHERE alu_nome LIKE  CONCAT('%',varnome,'%');
		END $
delimiter ;

/*Chamando procedure*/
CALL buscanome('Mar');

/*DROP PROCEDURE buscanome*/

delimiter $
	CREATE PROCEDURE buscaTelefone ()
		BEGIN
			SELECT alu_nome, alu_telefone FROM alunos
				WHERE alu_telefone LIKE '18%';
		END $
delimiter ;
CALL buscaTelefone();

/*buscando nome por letras iniciais*/
delimiter $
	CREATE PROCEDURE buscaNomeLetraInicial (letra varchar(1))
		BEGIN
			SELECT * FROM professores
				WHERE pro_nome LIKE CONCAT(letra,'%');
		END $
delimiter ;

CALL buscaNomeLetraInicial('n');


/*buscanco dentro da view*/
delimiter $
	CREATE PROCEDURE relAlunos (nomeDisc varchar(45))
	BEGIN
		SELECT alu_nome, mat_disciplina FROM relatoriosdiarios 
			WHERE mat_disciplina = nomeDisc;
	END $
delimiter ; 

CALL relAlunos('mysql');

/* ------------------------------------------ functions ------------------------------------------ */

delimiter !
	CREATE FUNCTION calc(valor DECIMAL(10,2)) RETURNS DECIMAL (10,2)
		BEGIN
			DECLARE taxa INT;
            SET taxa = 10;
            RETURN valor * taxa;
		END !
delimiter ;

SELECT calc(50.00);

delimiter !
	CREATE FUNCTION calc2(valor1 INT, valor2 INT) RETURNS INT
		BEGIN
            RETURN valor1 * valor2;
		END !
delimiter ;

SELECT calc2(5, 5);


/*fazendo ifs*/

delimiter !
	CREATE FUNCTION calc3(valor1 INT, valor2 INT) RETURNS INT
		BEGIN
			DECLARE val INT;
            SET val = 0;
            
			IF valor1 != valor2 THEN
				val = valor1 * valor2;
			END IF;
            
            RETURN val;
		END !
delimiter ;

SELECT calc2(5, 5);
























