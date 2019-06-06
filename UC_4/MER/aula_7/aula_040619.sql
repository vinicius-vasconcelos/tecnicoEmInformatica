use sala;

select alu_nome, alu_telefone, pro_nome, pro_telefone, mat_disciplina
	from materias join alunos join professores
		on materias.alu_codigo = alunos.alu_codigo and materias.pro_codigo = professores.pro_codigo;
        
/*criando visão*/
create view relatoriosDiarios as select alu_nome, alu_telefone, pro_nome, pro_telefone, mat_disciplina
	from materias join alunos join professores
		on materiarelatoriosdiarioss.alu_codigo = alunos.alu_codigo and materias.pro_codigo = professores.pro_codigo;
        
select * from relatoriosdiarios;

create view dicAluno as
	select alu_nome, mat_disciplina from alunos join materias
    on alunos.alu_codigo = materias.alu_codigo;
    
select * from dicAluno;


create view javascript as
	select alunos.alu_codigo, alu_nome, alu_telefone from alunos join materias
		on alunos.alu_codigo = materias.alu_codigo where mat_disciplina = 'javascript';
    
select * from javascript;

create view mysql as
	select alunos.alu_codigo, alu_nome, alu_telefone from alunos join materias
		on alunos.alu_codigo = materias.alu_codigo where mat_disciplina = 'mysql';
    
select * from mysql;

/*eventos para*/
select @@event_scheduler;
set global event_scheduler = ON;
set @@GLOBAL.event_scheduler = ON;
set global event_scheduler = 0;
set @@GLOBAL.event_scheduler = 1;

select * from alunos;
insert into alunos value(null, 'Freedie Mercury', '1994-05-01', 18997600002, 101440, 'Carai tio se é mó BURRÃO');

delimiter $
create event adiciona 
	on schedule every 1 minute do
		begin
			insert into alunos value(null, 'Freedie Mercury', '1994-05-01', 18997600002, 101440, 'Carai tio se é mó BURRÃO');
        end $
delimiter ;

drop event adiciona;

delimiter $
create event relatorioProfessores
	on schedule every 1 hour do
		begin
			drop view if exists professores;
			create view professores as
				select * from professores;
        end $
delimiter ;






















 
