/*ATIVIDADES*/
INSERT INTO alunos VALUES (null, 'Mané', '1998-05-01', '18997606666', '101434'),
						  (null, 'Pelé', '2001-02-22', '18997607777', '101435'),
                          (null, 'josé', '1996-01-13', '18997608888', '101436'),
                          (null, 'Joséfina', '1998-05-23', '18997609999', '101437'),
						  (null, 'Jubileu', '2010-11-29', '18997600000', '101438'),
                          (null, 'Creuza', '1978-12-13', '18997600001', '101439');
                          
SELECT * FROM alunos; 

INSERT INTO professores VALUES (null, 'Josué', '1975-02-02', '18996481110', '101500'),
							   (null, 'Creitom', '1975-11-30', '18996481112', '101501'),
                               (null, 'Maricreuza', '1915-10-22', '18996481113', '101502'),
                               (null, 'Pedrão', '1995-09-11', '18996481114', '101503'),
                               (null, 'Jonete', '1996-07-06', '18996481115', '101504'),
                               (null, 'Jairzinho', '1996-08-07', '18996481116', '101505'),
                               (null, 'Marineuza', '1996-09-08', '18996481117', '101506'),
                               (null, 'Crodoaldo', '1996-10-09', '18996481118', '101507');

SELECT * FROM professores;

ALTER TABLE alunos ADD alu_mencao VARCHAR(150) NULL;

UPDATE alunos SET alu_mencao = 'Parabéns você é top !!!' WHERE alu_codigo = 2 OR
															   alu_codigo = 4 OR
                                                               alu_codigo = 6 OR
                                                               alu_codigo = 8 OR
                                                               alu_codigo = 10 OR
                                                               alu_codigo = 12;
                                                               
UPDATE alunos SET alu_mencao = 'Carai tio se é mó BURRÃO !!!' WHERE alu_codigo = 1 OR
																	alu_codigo = 3 OR
																	alu_codigo = 5 OR
																	alu_codigo = 7 OR
																	alu_codigo = 9 OR
																	alu_codigo = 11;
SELECT * FROM alunos;

INSERT INTO professores VALUES (null, 'Fausto Silva', '1575-01-01', '022222222', '101508');
SELECT * FROM professores WHERE pro_nome = 'Fausto Silva';
DELETE FROM professores WHERE pro_nome = 'Fausto Silva';

SELECT DISTINCT(alu_nome), alu_mencao, pro_nome FROM alunos JOIN materias 
	ON alunos.alu_codigo = materias.alu_codigo
		JOIN professores ON professores.pro_codigo = materias.pro_codigo;
        
/*Selecionar MATERIAS e ALUNOS*/
SELECT * FROM materias LEFT JOIN alunos
	ON materias.alu_codigo = alunos.alu_codigo
		UNION
SELECT * FROM materias RIGHT JOIN alunos
	ON materias.alu_codigo = alunos.alu_codigo;
    
/*Selecionar MATERIAS e PROFESSORES*/
SELECT * FROM materias LEFT JOIN professores
	ON materias.pro_codigo = professores.pro_codigo
		UNION
SELECT * FROM materias RIGHT JOIN professores
	ON materias.pro_codigo = professores.pro_codigo;
    
SELECT COUNT(*) as qtdeProf FROM professores;

/*Selecionar MATERIAS, ALUNOS e PROFESSORES*/
/*SELECT * FROM materias LEFT JOIN alunos
	ON materias.alu_codigo = alunos.alu_codigo
		UNION
SELECT * FROM alunos LEFT JOIN materias
	ON materias.alu_codigo = alunos.alu_codigo
		UNION
SELECT * FROM professores LEFT JOIN materias
	ON materias.pro_codigo = professores.pro_codigo;*/
    
SELECT * FROM materias JOIN alunos JOIN professores
	ON materias.pro_codigo = professores.pro_codigo
    AND materias.alu_codigo = alunos.alu_codigo

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

                                                               