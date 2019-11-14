create database escola;
create table turma(
	cod_turma int primary key,
	nome varchar
);

create table aluno(
	cod_RA int primary key,
	cod_turma int not null,
	nome varchar,
	idade int,
	email varchar,
	telefone varchar,

	foreign key (cod_turma) references turma(cod_turma);
);

create table disciplina(
	nome varchar,
	cod_disci int primary key,
	cod_turma int not null,
	foreign key (cod_turma) references turma(cod_turma);
);

create table frequencia(
	dia date,
	cod_aluno int not null,
	presensa boolean,
	foreign key (cod_aluno) references aluno(cod_RA);
);
create table horario(
	cod_turma int not null,
	cod_disci int not null,
	horario varchar,
	foreign key (cod_turma) references turma(cod_turma);
	foreign key (cod_disci) references disciplina(cod_disci);
);
create table diario(
	cod_aluno int not null,
	cod_disci int not null,
	faltas int not null,
	nota int not null,
	foreign key (cod_aluno) references aluno(cod_RA);
	foreign key (cod_disci) references disciplina(cod_disci);
);