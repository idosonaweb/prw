-- drop banco de dados
-- drop database projeto01;

-- Criação de banco de dados
create database projeto02 ;

-- Selecionar banco de dados
use projeto02 ;

-- Criação da tabela usuário 
create table usuario 
(
	id_usuario			int 			not null auto_increment,
    nome_usuario		varchar(100) 	not null,
    email_usuario		varchar(100) 	not null,
    telefone_usuario	varchar(30) 	not null,
    foto_blob           blob,
    foto_nome           varchar(100),
    primary key(id_usuario)
)