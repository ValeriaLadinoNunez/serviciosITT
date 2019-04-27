CREATE DATABASE servicios;
use servicios;
CREATE TABLE usuarios(
	id_usuario int AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	user varchar(20) NOT NULL,
	pass varchar(20) NOT NULL,
	nombre varchar(80) NOT NULL,
	cargo varchar(50) NOT NULL,
	tipo_usuario varchar(1) NOT NULL);

CREATE TABLE servicios(
	id_servicio varchar(16) PRIMARY KEY NOT NULL,
	nombre_dpto varchar(80) NOT NULL,
	desc_servicio varchar(150) NOT NULL,
	id_user int NOT NULL,
	fecha_solicitud date NOT NULL,
	fecha_realizacion date,
	nombre_responsable varchar (80) NOT NULL,
	nombre_solicitante varchar(80) NOT NULL);
CREATE TABLE imagenes(
	id_img int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	id_servicio varchar(16) NOT NULL,
	nombre_img varchar(30),
	img longblob);
alter table servicios add foreign key(id_user) references usuarios(id_usuario);
alter table imagenes add foreign key(id_servicio) references servicios(id_servicio);
insert INTO usuarios VALUES('','admin','passw0rd','Valeria','Desarrolladora','A'); 

CREATE VIEW vision_de_servicios AS 
SELECT desc_servicio,fecha_solicitud, if(fecha_realizacion='0000-00-00','Pendiente',fecha_realizacion) as FechaFinal,img,s.id_servicio 
FROM servicios s,imagenes i where s.id_servicio=i.id_servicio;

