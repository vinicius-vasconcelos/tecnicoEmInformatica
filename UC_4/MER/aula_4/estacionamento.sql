create database estacionamento;

use estacionamento;

create table clientes (
	cli_codigo int primary key auto_increment,
    cli_nome varchar(45),
    cli_telefone varchar(20),
    cli_idade int
) engine = InnoDB default charset = 'latin1';

insert into clientes values (null, 'Pedrão', '997601158', 8),
							(null, 'Vinisão', '997601158', 9),
                            (null, 'Carlão', '997601158', 8),
                            (null, 'Zezão', '997601158', 15),
                            (null, 'Pelé', '997601158', 73),
                            (null, 'Mané', '997601158', 3),
                            (null, 'José', '997601158', 83),
                            (null, 'Joséfina', '997601158', 63),
                            (null, 'Marcão', '997601158', 53),
                            (null, 'Paulão', '997601158', 43),
                            (null, 'Brandi Love', '997601158', 33),
                            (null, 'Sasha Gray', '997601158', 25);
                            
select * from clientes;
select * from clientes where cli_nome like '%a%';
select * from clientes where cli_idade > 18;


