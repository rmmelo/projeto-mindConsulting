create database mindConsulting;


create table Usuarios 
		(ID integer auto_increment primary key not null,
		 NomeCompleto Varchar(80) not null,
		 CPF Varchar(11) not null,
		 Email Varchar(40) not null,
		 Senha Varchar(60) not null,
		 ImagemPerfil Varchar(120),
		 TipoAcesso Int
);

select * from Usuarios;


