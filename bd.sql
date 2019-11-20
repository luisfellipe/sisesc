create database escola;
	create table turma(
		cod_turma int primary key,
		nome varchar
	);

	create table aluno(
		cod_RA varchar(8) primary key,
		cod_turma int not null,
		nome varchar,
		idade int,
		email varchar,
		telefone varchar,
		senha varchar,
		username varchar,
		foreign key (cod_turma) references turma(cod_turma)
	);

	create table disciplina(
		nome varchar,
		cod_disc int primary key,
		cod_turma int not null,
		foreign key (cod_turma) references turma(cod_turma)
	);

	create table frequencia(
		dia date,
		cod_aluno int not null,
		presensa boolean,
		foreign key (cod_aluno) references aluno(cod_RA)
	);
	create table horario(
		cod_turma int not null,
		cod_disc int not null,
		horario varchar,
		foreign key (cod_turma) references turma(cod_turma),
		foreign key (cod_disc) references disciplina(cod_disc)
	);
	create table diario(
		cod_aluno varchar(8) not null,
		cod_disc int not null,
		faltas int not null,
		nota int not null,
		foreign key (cod_aluno) references aluno(cod_RA);
		foreign key (cod_disc) references disciplina(cod_disc)
	);

	create table prova(
		nota decimal not null,
		cod_disc int,
		cod_aluno varchar(8),
		num_prova int, 
		foreign key (cod_disc) references disciplina(cod_disc),
		foreign key (cod_aluno) references aluno(cod_RA)
	);
	create table users(
		username varchar,
		typeuser int(2)
	);