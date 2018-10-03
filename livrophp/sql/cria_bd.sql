create database tarefas collate = utf8_general_ci;

use tarefas;

create table tarefas(
	id int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(20) not null,
	descricao TEXT,
	prazo DATE,
	prioridade int(1),
	concluida boolean);
	
	CREATE TABLE anexos (
		id INTEGER AUTO_INCREMENT PRIMARY KEY,
		tarefa_id INTEGER NOT NULL,
		nome VARCHAR(255) NOT NULL,
		arquivo VARCHAR(255) NOT NULL);
	
	insert into tarefas(nome,descricao,prioridade) values ('Estudar PHP','Continuar meus estudos de PHP e Mysql',1);
	insert into tarefas(nome,descricao,prioridade) values ('Estudar HTML','Html é importante',2);
	insert into tarefas(nome,descricao,prioridade) values ('Comprar leita','Desnatado',1);
	insert into tarefas(nome,descricao,prioridade) values ('Arrumar as fotos','Quando tiver de boa',3);
	
	
	
	create database estacionamento collate = utf8_general_ci;
	
	use estacionamento;
	
	create table veiculos(
	id int AUTO_INCREMENT PRIMARY KEY,
	placa varchar(8) not null,
	marca varchar(20) not null,
	modelo varchar(20) not null,
	hora_entrada timestamp,
	hora_saida timestamp);
	
	insert into veiculos (placa,marca,modelo) values ('MBC-6009','Troller','T-4 4x4 3.0 TB Int. Cap. R');
	insert into veiculos (placa,marca,modelo) values ('HXP-6952','Cadillac','Deville/Eldorado 4.9','','');
	insert into veiculos (placa,marca,modelo) values ('NAE-6755','Peugeot','206 Select./Presence 1.6/1.6 Flex 16V 5p');
	insert into veiculos (placa,marca,modelo) values ('NBA-3219','Maserati','Quattroporte Executive 4.2 32V 400cv');
	insert into veiculos (placa,marca,modelo) values ('NDA-0511','HAFEI','Towner Jr. Pick-up Ba');
	insert into veiculos (placa,marca,modelo) values ('JGA-7434','Envemo','Master 4.0 Diesel');
	insert into veiculos (placa,marca,modelo) values ('JEW-9544','CHANA','Cargo CD 1.0 8V 53cv Pick-Up');