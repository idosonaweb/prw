create database cadastro_produto ;

use cadastro_produto ;

create table produto 
(
	data_inicial		date 			not null ,
	data_final			date 			not null ,
    primary key(data_inicial, data_final)
)