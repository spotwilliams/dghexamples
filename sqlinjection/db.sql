create database miBD;





create table usuarios (
	id int Primary Key auto_increment not null,
	nickname varchar(50) unique not null,
	email varchar(100) unique not null,
	pass varchar(100) not null,
	creado date,
	avatar varchar(200),
	descripcion text
);
