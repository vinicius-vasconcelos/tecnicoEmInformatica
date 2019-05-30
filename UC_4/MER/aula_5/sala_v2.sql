CREATE SCHEMA IF NOT EXISTS sala  DEFAULT CHARACTER SET utf8;
USE sala;

CREATE TABLE IF NOT EXISTS alunos (
	alu_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    alu_nome VARCHAR(45) NOT NULL,
    alu_dt_nasc DATE NOT NULL,
    alu_telefone VARCHAR(11) NOT NULL,
    alu_ra CHAR(6) NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS professores (
	pro_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pro_nome VARCHAR(45) NOT NULL,
    pro_dt_nasc DATE NOT NULL,
    pro_telefone VARCHAR(11) NOT NULL,
    pro_rn CHAR(6) NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS materias (
	mat_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mat_disciplina VARCHAR(45) NULL,
    mat_horas INT(4) NULL,
    
    alu_codigo INT NOT NULL,
    pro_codigo INT NOT NULL,
    
    CONSTRAINT fk_materiais_professores FOREIGN KEY (pro_codigo) REFERENCES professores(pro_codigo) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT fk_materiais_alunos FOREIGN KEY (alu_codigo) REFERENCES alunos(alu_codigo) ON DELETE NO ACTION ON UPDATE NO ACTION
    
) ENGINE = InnoDB;


INSERT INTO alunos VALUES (null, 'João', '1998-05-23', '18997601111', '123456'),
						  (null, 'Maria', '2019-05-22', '18997602222', '654321'),
                          (null, 'viniGOD', '1996-01-13', '18997601158', '101426'),
                          (null, 'JoãoGOD', '1998-05-23', '18997603333', '101430'),
						  (null, 'MariaGOD', '2019-05-22', '18997604444', '101431'),
                          (null, 'vini', '1996-01-13', '18997605555', '101433');
                          
INSERT INTO professores VALUES (null, 'Nilo', '1998-05-23', '18997601111', '123456'),
							   (null, 'Danilo', '2019-05-22', '18997602222', '654321'),
							   (null, 'Anderson', '1996-01-13', '18997601158', '101426');


SELECT * FROM alunos;
SELECT * FROM professores;

/*ALTER TABLE professores ADD pro_sobrenome VARCHAR(50) NOT NULL AFTER pro_nome;*/
/*ALTER TABLE professores DROP pro_sobrenome;*/

CREATE TABLE bk_alunos SELECT * FROM alunos; /*backup interno*/
CREATE TABLE bk_professores SELECT * FROM professores;


INSERT INTO materias VALUES (null, 'javascript', '40', 1, 2),
							(null,'mysql', '80', 1, 1),
                            (null, 'javascript', '40', 2, 2),
                            (null,'mysql', '40', 2, 1),
                            (null, 'javascript', '40', 3, 2),
                            (null, 'mysql', '40', 3, 1);

SELECT * FROM materias;

SELECT * FROM materias JOIN alunos on alunos.alu_codigo = alunos.alu_codigo;
SELECT * FROM materias JOIN alunos on alunos.alu_codigo = materiais.alu_codigo WHERE alunos.alu_codigo = 2;
SELECT * FROM materias JOIN alunos on alunos.alu_codigo = materiais.alu_codigo GROUP BY alunos.alu_codigo;

SELECT * FROM materias JOIN alunos on alunos.alu_codigo = materias.alu_codigo  /*eu*/
	JOIN professores on professores.pro_codigo = materias.pro_codigo;

SELECT * FROM materias JOIN alunos JOIN professores 
	on alunos.alu_codigo = materias.alu_codigo 
    AND professores.pro_codigo = materias.pro_codigo;
    
SELECT alu_nome, alu_telefone, pro_nome, pro_telefone, mat_disciplina  FROM materias JOIN alunos JOIN professores 
	on alunos.alu_codigo = materias.alu_codigo 
    AND professores.pro_codigo = materias.pro_codigo;
    
SELECT * FROM materias LEFT JOIN alunos
	on alunos.alu_codigo = materias.alu_codigo; 
    
SELECT * FROM materias RIGHT JOIN alunos
	on alunos.alu_codigo = materias.alu_codigo;
    
    
/*desabilitando todas as chaves estrangeiras para dar o truncate*/
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE alunos;
TRUNCATE TABLE professores;
TRUNCATE TABLE materias;
SET FOREIGN_KEY_CHECKS = 1;

SELECT COUNT(*) as qtde FROM alunos;
SELECT COUNT(*) as qtde FROM materias;
SELECT COUNT(*) as qtde FROM professores;

SELECT COUNT(DISTINCT(alunos.alu_nome)) as qtde FROM alunos;



















