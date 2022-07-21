create database cadastro_mercado ;

use cadastro_mercado ;

create table mercado 
(
	id_mercado			int 			not null auto_increment,
    nome_mercado		varchar(50) 	not null,
    rua					varchar(50) 	not null,
    bairro				varchar(50) 	not null,
    cidade				varchar(50) 	not null,
    estado				varchar(02) 	not null,
    cep					varchar(10) 	not null,
    
    primary key(id_mercado)
)