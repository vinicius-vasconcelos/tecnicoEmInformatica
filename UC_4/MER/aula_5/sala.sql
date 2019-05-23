CREATE DATABASE sala;
USE sala;

CREATE TABLE alunos (
	alu_codigo INT PRIMARY KEY AUTO_INCREMENT,
    alu_nome VARCHAR(45),
    alu_ra INT,
    alu_dt_nasc DATE,
    alu_telefone VARCHAR(20)
) ENGINE = Innodb DEFAULT CHARSET = 'latin1';

CREATE TABLE professores (
	pro_codigo INT PRIMARY KEY AUTO_INCREMENT,
    pro_nome VARCHAR(45),
    pro_nr INT,
    pro_dt_nasc DATE,
    pro_telefone VARCHAR(20)
) ENGINE = Innodb DEFAULT CHARSET = 'latin1';

CREATE TABLE materias (
	mat_codigo INT PRIMARY KEY AUTO_INCREMENT,
    mat_nome VARCHAR(45),
    mat_horas DECIMAL(4,2)
) ENGINE = Innodb DEFAULT CHARSET = 'latin1';


CREATE TABLE alunos_materias (
	alu_codigo INT,
    mat_codigo INT,
    
    CONSTRAINT fk_alunosMateriais_alunos FOREIGN KEY (alu_codigo) REFERENCES alunos(alu_codigo),
    CONSTRAINT fk_alunosMateriais_materiais FOREIGN KEY (mat_codigo) REFERENCES materiais(mat_codigo),
    CONSTRAINT pk_alunos_materiais PRIMARY KEY (alu_codigo, mat_codigo)
    
)ENGINE = Innodb DEFAULT CHARSET = 'latin1';


CREATE TABLE professores_materias (
	pro_codigo INT,
    mat_codigo INT,
    
    CONSTRAINT fk_alunosMateriais_professores FOREIGN KEY (pro_codigo) REFERENCES professores(pro_codigo),
    CONSTRAINT fk_alunosMateriais_materiais FOREIGN KEY (mat_codigo) REFERENCES materiais(mat_codigo),
    CONSTRAINT pk_professores_materiais PRIMARY KEY (pro_codigo, mat_codigo)
    
)ENGINE = Innodb DEFAULT CHARSET = 'latin1';


INSERT INTO materias VALUES(NULL, 'Calculo I', 40),
						   (NULL, 'Calculo I', 40),
                           (NULL, 'Calculo I', 40),
                           (NULL, 'Calculo I', 40);

UPDATE materias SET mat_nome = 'HTML', mat_horas = 80 WHERE mat_codigo = 1;
UPDATE materias SET mat_nome = 'CSS', mat_horas = 120 WHERE mat_codigo = 4;   

DELETE FROM materias WHERE mat_codigo = 1;

INSERT INTO alunos VALUES(NULL, 'Vinicius', '101426666', '1996-01-13', '(18)99760-1158'),
						  (NULL, 'Vinicius GOD', '101426667', '1996-01-13', '(18)99760-1158'),
                          (NULL, 'ViniGOD', '101426668', '1996-01-13', '(18)99760-1158');
                          
INSERT INTO professores VALUES(NULL, 'Nillo', '1426666', '1996-01-13', '(18)99760-1158'),
						  (NULL, 'Nillo GOD', '1426667', '1996-01-13', '(18)99760-1158');
                           

                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           