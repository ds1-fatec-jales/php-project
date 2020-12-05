create database db_sistema;
create table usuarios (login char(50), senha char(50));
ALTER TABLE usuarios ADD CONSTRAINT usuarios_pk PRIMARY KEY  (login);
insert into usuarios values ('heitor','senha');
