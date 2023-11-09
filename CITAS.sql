create database proyecto ;
use proyecto ;

create table rol (
idRol  int auto_increment primary key not null ,
descripcionRol varchar (30) NOT NULL ,
estadoRol varchar (20) not null );

create table usuario (
idUsuario  int auto_increment primary key not null ,
correoUsuario varchar (50) NOT NULL ,
passwordUsuario varchar (20) not null ,
estadoUsuario varchar (20) not null ,
IdRolFK int );

create table empleado (
idEmpleado  int auto_increment primary key not null ,
numDocEmpleado varchar (15) not null ,
tipoDocEmpleado varchar (20) not null ,
nombreEmpleado varchar (50) not null ,
apellidoEmpleado varchar (50) not null ,
direccionEmpleado varchar (50) not null ,
telefonoEmpleado varchar (20) not null ,
estadoEmpleado varchar (20) not null ,
idUsuarioFK int );

create table cliente  (
idCliente  int auto_increment primary key not null ,
numDocCliente varchar (15) not null ,
tipoDocCliente varchar (20) not null ,
nombreCliente varchar (50) not null ,
apellidoCliente varchar (50) not null ,
direccionCliente varchar (50) not null ,
telefonoCliente varchar (20) not null ,
estadoCliente varchar (20) not null ,
idUsuarioFK int );

create table cita  (
idCita  int auto_increment primary key not null ,
fechaCita date  not null ,
horaCita time not null ,
estadoCita varchar (20) not null ,
idEmpleadoFK int ,
idClienteFK int,
idServicioFK  int );

create table servicio  (
idServicio int auto_increment primary key not null ,
descripcionServicio varchar (50)  not null ,
estadoServicio varchar (20)  not null );

alter table usuario  add constraint relacion1 foreign key (idRolFK) references rol (idRol) on delete cascade on update cascade;
alter table empleado  add constraint relacion2 foreign key (idUsuarioFK) references usuario (idUsuario) on delete cascade on update cascade;
alter table cliente  add constraint relacion3 foreign key (idUsuarioFK) references usuario (idUsuario) on delete cascade on update cascade;
alter table cita  add constraint relacion4 foreign key (idclienteFK) references cliente (idCliente) on delete cascade on update cascade;
alter table cita add constraint relacion5 foreign key (idEmpleadoFK) references empleado (idEmpleado) on delete cascade on update cascade;
alter table cita add constraint relacion6 foreign key (idServicioFK) references servicio  (idServicio) on delete cascade on update cascade;

insert into rol values (null,"empleado","activo");
insert into rol values (null,"cliente","inactivo");
insert into rol values (null,"administrador","activo");

select * from rol;

insert into usuario values (null,"julianaG@gmail.com","juli2564","activo","1");
insert into usuario values (null,"samuel05@gmail.com","17/08/2022","inactivo","2");
insert into usuario values (null,"david88@hotmail.com","david15","inactivo","2");
insert into usuario values (null,"isabelam@gmail.com","isabela11@","activo","3");
insert into usuario values (null,"antonio76@gmail.com","159642","activo","3");
insert into usuario values (null,"dilangutierrez@gmail.com","tovar","inactivo","2");
insert into usuario values (null,"stiven456@gmail.com","picachu","activo","1");
insert into usuario values (null,"salome4569@gmail.com","24242424kl","activo","1");
insert into usuario values (null,"julian15697@hotmail.com","_52@1520","activo","1");
insert into usuario values (null,"valentina25cardenas@outlook.com ","valen25106!","activo","1");
insert into usuario values (null,"michael25@outlook.com ","147852369","activo","2");
insert into usuario values (null,"daniel0213@gmail.com ","misterdan123","activo","2");
insert into usuario values (null,"jhoan101253@hotmail.com ","palacio235","activo","2");
insert into usuario values (null,"caguzman@outlook.com ","milo2653","activo","2");
insert into usuario values (null,"cristianvbn@misena.edu.co ","cristainrsilo","activo","2");



select * from usuario;

insert into empleado values (null,"104879334","cc","samuel","martinez","Avenida Calle 26 No 59-51","3194126590","inactivo","2");
insert into empleado values (null,"1025600359","cc","valentina","cardenas","Calle 53 # 25A-35","3194566030","activo","10");
insert into empleado values (null,"1236798035","cc","julian","toro","Calle 100 # 11B-27 Bogotá","3001542644","activo","9");
insert into empleado values (null,"145698230","cc","salome","contreras","Transversal 9 a No. 29 - 29","3194108866","activo","8");
insert into empleado values (null,"1073601695","ti","stiven","salamanca","Calle 71 D SUR 18 Q 37 ","3201361597","activo","7");

select * from empleado ;

insert into cliente values (null,"1073600687","ti","dilan","gutierrez","calle 71 d sur 18 q 37 ","310843745","inactivo","6");
insert into cliente values (null,"1890367937","cc","david","perdomo","Carrera 10 # 3-92","3221356981","inactivo","3");
insert into cliente values (null,"1735678231","cc","samuel","diaz","Calle 8 # 7-40","3108434236","inactivo","2");
insert into cliente values (null,"1023655489","cc","Michael","Sabogal","Calle 38 sur # 30 d 27","3104837459","Activo","11");
insert into cliente values (null,"1025320368","ti","Daniel","Lopez","carera 8 32 # 8-16","7908038","Activo","12");
insert into cliente values (null,"1735678001","cc","jhoan","palacio","Calle 50 sur # 48 f 27","3101254983","inactivo","13");
insert into cliente values (null,"1731235980","ti","camilo","guzman","Calle 72 b sur 19 k 27","3101006598","Activo","14");
insert into cliente values (null,"1033705980","ti","Cristian","Arevalo","Calle 68 A # 18 B 32 SUR","3158434213","Activo","15");

select * from cliente;

insert into servicio values (null, "Tratamiento para el cabello","Activo");
insert into servicio values (null, "Manicure","Activo");
insert into servicio values (null, "Corte para damas , caballeros y niños","Activo");
insert into servicio values (null, "Depilacion ","inactivo");
insert into servicio values (null, "Tinte capilar","Activo");
insert into servicio values (null, "Perfilacion de la barba","Activo");
insert into servicio values (null, "Cepillados","Activo");
insert into servicio values (null, "Decoloracion","Activo");
insert into servicio values (null, "Recogidos","Activo");
insert into servicio values (null, "Alisados","Activo");

SELECT * from servicio;

insert into cita values (null,"18-10-22","12:18 ","Inactiva",3,2,5 );
insert into cita values (null,"25-05-23","08:10 ","Activa",1,3,7 ); 
insert into cita values (null,"25-02-23","02:47 ","inactiva",5,3,3 );
insert into cita values (null,"08-10-23","10:20 ","inactiva",2,5,1 );
insert into cita values (null,"15-11-23","01:48 ","inactiva",4,8,2 );


select * from cita;




DELIMITER $$


CREATE   PROCEDURE buscarempleado ()  BEGIN
SELECT * FROM empleado;
END$$

DELIMITER ;



DELIMITER $$


CREATE   PROCEDURE buscarusuario ()  BEGIN
SELECT * FROM usuario;
END$$

DELIMITER ;



DELIMITER $$


CREATE   PROCEDURE buscarservicio ()  BEGIN
SELECT * FROM servicio;
END$$

DELIMITER ;



DELIMITER $$


CREATE   PROCEDURE buscarcita ()  BEGIN
SELECT * FROM cita;
END$$

DELIMITER ;


DELIMITER $$


CREATE   PROCEDURE buscarcliente ()  BEGIN
SELECT * FROM cliente;
END$$

DELIMITER ;


DELIMITER $$


CREATE   PROCEDURE buscarrol ()  BEGIN
SELECT * FROM rol;
END$$

DELIMITER ;



DELIMITER $$


CREATE   PROCEDURE crearidRol ()  BEGIN
SELECT * FROM rol;
END$$

DELIMITER ;




CREATE VIEW Buscarcliente AS
SELECT telefonoCliente, apellidoCliente
FROM cliente;

CREATE VIEW Buscarcliente_nombre AS
SELECT nombreCliente, numDocCliente
FROM cliente;



CREATE VIEW Buscarnombre AS
SELECT nombreEmpleado , tipoDocEmpleado
FROM empleado;

CREATE VIEW Buscardireccion2 AS
SELECT telefonoEmpleado, apellidoEmpleado
FROM empleado;



CREATE VIEW BuscarCorreo_Usuario AS
SELECT correoUsuario , estadoUsuario
FROM usuario;

CREATE VIEW Buscarcontraseña_usuario AS
SELECT idUsuario  , passwordUsuario
FROM usuario;

CREATE VIEW Buscarservicio AS
SELECT idServicio
FROM servicio;

CREATE VIEW Buscardescripcion_servicicio AS
SELECT descripcionServicio ,estadoServicio
FROM servicio;

CREATE VIEW Buscarhora_estado AS
SELECT horaCita , estadoCita
FROM cita;

CREATE VIEW Buscarid_fecha AS
SELECT idCita , fechaCita
FROM cita;

CREATE VIEW Buscardescripcion_estado AS
SELECT descripcionRol ,estadoRol
FROM rol;

CREATE VIEW Buscarid AS
SELECT idRol
FROM rol;



select * from cliente where nombreCliente ="Michael"
select * from cliente where apellidoCliente ="díaz"

select * from cita where fechaCita ="2018-10-22"
select * from cita where idCita ="1"

select * from empleado where apellidoEmpleado ="toro"
select * from empleado where direccionEmpleado ="Avenida Calle 26 No 59-51"

select * from servicio where idServicio =" 1"
select * from servicio where estadoServicio ="Activo"

select * from usuario where correoUsuario ="julianaG@gmail.com"
select * from usuario where passwordUsuario ="juli2564"

select * from rol where idRol ="2"
select * from rol where  descripcionRol ="empleado"




select *
from usuario
where usuario.idUsuario between "1" and "5";

select *
from cita
where cita.idCita between  "1" and "3";

select *
from cliente
where cliente.numDocCliente between  "1073600687" and "1735678231";

select *
from empleado
where empleado.idEmpleado between  "5" and "7";

select *
from rol
where rol.idRol between  "2" and "3";

select *
from servicio
where servicio.idServicio between  "3 " and "9";






select * from cita
where fechaCita like "2018-10-22";
select * from cita
where horaCita like "12:18:00";

select * from cliente
where numDocCliente like "1890367937";
select * from cliente
where telefonoCliente like "3104837459";

select * from empleado
where apellidoEmpleado like "cardenas";
select * from empleado
where direccionEmpleado like "Calle 71 D SUR 18 Q 37 ";

select * from rol
where estadoRol like "activo";
select * from rol
where descripcionRol like "empleado";

select * from servicio
where idServicio like "10";

select * from usuario
where idUsuario like "1";
select * from usuario
where passwordUsuario like "159642";


select rol.idRol, rol.descripcionRol , usuario.idUsuario,usuario.correoUsuario
from rol
inner join usuario
on rol.idRol=usuario.idUsuario

select cliente.idCliente, cliente.apellidoCliente , cita.idCita,cita.horaCita
from cliente
inner join cita
on cliente.idCliente=cita.idCita

select cita.idCita, cita.fechaCita , servicio.idServicio,servicio.descripcionServicio
from cita
inner join servicio
on cita.idCita=servicio.idServicio

select cli.nombreCliente , a.estadoEmpleado , a.numDocEmpleado , cit.fechaCita , cit.horaCita , serv.descripcionServicio from cita as cit inner join  empleado as a on a.idEmpleado=cit.idEmpleadoFK inner join servicio as serv on serv.idServicio=cit.idServicioFK  inner join cliente as cli on cli.idCliente=cit.idClienteFK ;


delimiter $
create procedure sp_insertar_cita (in pidCita int(11)
,pfechaCita date
,phoraCita time
,pestadoCita varchar(20)
,pidEmpleadoFK int(11)
,pidClienteFK int(11)
,pidServicioFK int(11) )
BEGIN
INSERT INTO  cita(idCita , fechaCita,horaCita ,estadoCita,idEmpleadoFK, idClienteFK ,idServicioFK )
values(pidCita , pfechaCita,phoraCita ,pestadoCita,pidEmpleadoFK, pidClienteFK ,pidServicioFK );
end $
delimiter ;


delimiter $
create procedure pa_actualizar_cita (pidCita int(11)
,pfechaCita date
,phoraCita time
,pestadoCita varchar(20)
,pidEmpleadoFK int(11)
,pidClienteFK int(11)
,pidServicioFK int(11) )
BEGIN
UPDATE cita
SET fechaCita=pfechaCita, horaCita=phoraCita, estadoCita=pestadoCita, idEmpleadoFk=pidEmpleadoFK ,idClienteFK=pidClienteFK , idServicioFK=pidServicioFK
Where idCita=idCita;
end $
delimiter ;


delimiter $
create procedure pa_consultar_cita ( in idCita int(11) )
BEGIN
SELECT * FROM cliente Where idCita =idCita ;
end $
delimiter ;


delimiter $
create procedure sp_consultar_cita()
BEGIN
SELECT * FROM idCita;
end $
delimiter ;

delimiter $
create procedure pa_cita(in idCita int(11))
BEGIN
DELETE FROM cita Where idCita=idCita;
end $
delimiter ;

 delimiter $
create procedure sp_insertar_cliente (pidCliente int ,
pnumDocCliente varchar(15) ,
ptipoDocCliente varchar(20) ,
pnombreCliente varchar(50) ,
papellidoCliente varchar(50), 
pdireccionCliente varchar(50), 
ptelefonoCliente varchar(20) ,
pestadoCliente varchar(20) ,
pidUsuarioFK int )
BEGIN
INSERT INTO  cliente (idCliente  ,numDocCliente , tipoDocCliente  ,nombreCliente  ,apellidoCliente , direccionCliente ,telefonoCliente  ,estadoCliente ,idUsuarioFK )
values(pidCliente  ,pnumDocCliente , ptipoDocCliente  ,pnombreCliente  ,papellidoCliente , pdireccionCliente ,ptelefonoCliente  ,pestadoCliente ,pidUsuarioFK );
end $
delimiter ;

delimiter $
create procedure pa_actualizar_cliente (pidCliente int ,
pnumDocCliente varchar(15) ,
ptipoDocCliente varchar(20) ,
pnombreCliente varchar(50) ,
papellidoCliente varchar(50), 
pdireccionCliente varchar(50), 
ptelefonoCliente varchar(20) ,
pestadoCliente varchar(20) ,
pidUsuarioFK int )
BEGIN
UPDATE cliente
SET numDocCliente=pnumDocCliente,tipoDocCliente=ptipoDocCliente ,nombreCliente=pnombreCliente ,apellidoCliente=papellidoCliente,direccionCliente=pdireccionCliente,telefonoCliente=ptelefonoCliente,estadoCliente=pestadoCliente,idUsuarioFK=pidUsuarioFK
Where idCliente=idCliente;
end $
delimiter 
 
 delimiter $
create procedure pa_consultar_cliente ( in idCliente int )
BEGIN
SELECT * FROM cita Where idCliente=idCliente ;
end $
delimiter ;

delimiter $
create procedure sp_consultar_cliente()
BEGIN
SELECT * FROM idCliente;
end $
delimiter ;

delimiter $
create procedure pa_cliente(in idCliente int)
BEGIN
DELETE FROM cliente Where idCliente=idCliente;
end $
delimiter ;


delimiter $
create procedure sp_insertar_empleado (in pidEmpleado int ,
pnumDocEmpleado varchar(15) ,
ptipoDocEmpleado varchar(20) ,
pnombreEmpleado varchar(50) ,
papellidoEmpleado varchar(50), 
pdireccionEmpleado varchar(50), 
ptelefonoEmpleado varchar(20) ,
pestadoEmpleado varchar(20) ,
pidUsuarioFK int  )
BEGIN
INSERT INTO  cliente(idEmpleado ,numDocEmpleado  ,tipoDocEmpleado ,nombreEmpleado  ,apellidoEmpleado  ,direccionEmpleado ,telefonoEmpleado  ,estadoEmpleado ,idUsuarioFK )
values (idEmpleado ,numDocEmpleado  ,tipoDocEmpleado ,nombreEmpleado  ,apellidoEmpleado  ,direccionEmpleado ,telefonoEmpleado  ,estadoEmpleado ,idUsuarioFK);
end $ 
delimiter ;


delimiter $
create procedure pa_actualizar_empleado  (in pidEmpleado int ,
pnumDocEmpleado varchar(15) ,
ptipoDocEmpleado varchar(20) ,
pnombreEmpleado varchar(50) ,
papellidoEmpleado varchar(50), 
pdireccionEmpleado varchar(50), 
ptelefonoEmpleado varchar(20) ,
pestadoEmpleado varchar(20) ,
pidUsuarioFK int  )
BEGIN
UPDATE cliente
SET numDocEmpleado=pnumDocEmpleado,tipoDocEmpleado=ptipoDocEmpleado,nombreEmpleado=pnombreEmpleado,apellidoEmpleado=papellidoEmpleado,direccionEmpleado=pdireccionEmpleado,telefonoEmpleado=ptelefonoEmpleado,estadoEmpleado=pestadoEmpleado,idUsuarioFK=pidUsuarioFK
Where idEmpleado=idEmpleado;
end $
delimiter ;

delimiter $
create procedure pa_consultar_empleado ( in idEmpleado int )
BEGIN
SELECT * FROM usuario Where idEmpleado=idEmpleado ;
end $
delimiter ;


delimiter $
create procedure sp_consultar_empleado()
BEGIN
SELECT * FROM idEmpleado;
end $
delimiter ;

delimiter $
create procedure pa_empleado(in idCita int(11))
BEGIN
DELETE FROM empleado Where idEmpleado=idEmpleado;
end $
delimiter ;



delimiter $
create procedure sp_insertar_rol (in pidRol int,
pdescripcionRol varchar(30) ,
pestadoRol varchar(20) )
BEGIN
INSERT INTO  empleado(idRol , descripcionRol ,estadoRol )
values(pidRol , pdescripcionRol ,pestadoRol );
end $
delimiter ;




delimiter $
create procedure pa_actualizar_rol (in pidRol int,
pdescripcionRol varchar(30) ,
pestadoRol varchar(20) )
BEGIN
UPDATE empleado
SET descripcionRol=pdescripcionRol, estadoRol=pestadoRol  
Where idRol=idRol;
end $
delimiter ;



delimiter $
create procedure pa_consultar_rol ( in idRol int )
BEGIN
SELECT * FROM usuario Where idRol=idRol ;
end $
delimiter ;


delimiter $
create procedure sp_consultar_rol()
BEGIN
SELECT * FROM idRol;
end $
delimiter ;

delimiter $
create procedure pa_rol(in idRol int)
BEGIN
DELETE FROM rol Where idRol=idRol;
end $
delimiter ;


delimiter $
create procedure sp_insertar_servicio (in pidServicio int , 
pdescripcionServicio varchar(50) ,
pestadoServicio varchar(20) )
BEGIN
INSERT INTO servicio(idServicio,descripcionServicio,estadoServicio )
values(pidServicio,pdescripcionServicio,pestadoServicio );
end $
delimiter ;

delimiter $
create procedure pa_actualizar_servicio (pidServicio int , 
pdescripcionServicio varchar(50) ,
pestadoServicio varchar(20) )
BEGIN
UPDATE servicio
SET descripcionServicio=pdescripcionServicio,estadoServicio=pestadoServicio
Where idServicio=idServicio;
end $
delimiter ;

delimiter $
create procedure pa_consultar_servicio ( in idServicio int )
BEGIN
SELECT * FROM cita Where idServicio=idServicio ;
end $
delimiter ;


delimiter $
create procedure sp_consultar_servicio()
BEGIN
SELECT * FROM idServicio;
end $
delimiter ;

delimiter $
create procedure pa_servicio(in idServicio int)
BEGIN
DELETE FROM servicio Where idServicio=idServicio;
end $
delimiter ;

delimiter $
create procedure sp_insertar_usuario(in pidUsuario int,
pcorreoUsuario varchar(50) ,
ppasswordUsuario varchar(20), 
pestadoUsuario varchar(20) ,
pIdRolFK int )
BEGIN
INSERT INTO  usuario(idUsuario, correoUsuario,passwordUsuario ,IdRolFK)
values( pidUsuario , pcorreoUsuario , ppasswordUsuario , pestadoUsuario,pIdRolFK  );
end $
delimiter ;

delimiter $
create procedure pa_actualizar_usuario (in pidUsuario int,
pcorreoUsuario varchar(50) ,
ppasswordUsuario varchar(20), 
pestadoUsuario varchar(20) ,
pIdRolFK int )
BEGIN
UPDATE usuario
SET correoUsuario=pcorreoUsuario,passwordUsuario=ppasswordUsuario,estadoUsuario=pestadoUsuario,IdRolFK=pIdRolFK
Where idUsuario=idUsuario ;
end $
delimiter ;

delimiter $
create procedure pa_consultar_usuario ( in idUsuario  int )
BEGIN
SELECT * FROM cliente Where idUsuario=idUsuario  ;
end $
delimiter ;


delimiter $
create procedure sp_consultar_usuario()
BEGIN
SELECT * FROM idUsuario  ;
end $
delimiter ;

delimiter $
create procedure pa_usuario(in idUsuario   int)
BEGIN
DELETE FROM usuario Where idUsuario=idUsuario  ;
end $
delimiter ;


DELIMITER //
CREATE TRIGGER log_tabla_empleado AFTER INSERT ON empleado
FOR EACH ROW BEGIN
    INSERT INTO nombres (nombre)
    VALUE ('Se creó un registro en empleado  ');
END //
DELIMITER ;

