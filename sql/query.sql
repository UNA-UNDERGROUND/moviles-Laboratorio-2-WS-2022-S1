create SCHEMA TransportesJonathanGuzman;

use TransportesJonathanGuzman;


create table buses
(
    placa                 int                                 not null,
    marca                 varchar(50)                         not null,
    ruta                  varchar(100)                        not null,
    num_plazas            int                                 not null,
    proximo_mantenimiento date                                not null,
    disponible            bool                                null,
    tipo                  enum ('buseta', 'bus', 'bus-doble') not null,
    constraint buses_pk
        primary key (placa)
);

create table empleados(
    idEmpleado      int            auto_increment,
    nombre          varchar(75)    not null,
    apellidos       varchar(150)   not null,
    telefono        varchar(20)    not null,
    direccion       varchar(500)   not null,
    tipo_licencia   varchar(10)    not null,
    constraint      empleados_pk
        primary key(idEmpleado)
);

create table solicitud_aplicacion(
    numero_boleta   int             auto_increment,
    placa           int             not null,
    idEmpleado      int             not null,
    ruta            varchar(100)    not null,
    fecha_solicitud date            not null,
    constraint solicitud_aplicacion_pk
        primary key (numero_boleta)
);

/*
* llaves foraneas
*/
-- solicitud aplicacion
alter table solicitud_aplicacion
    add constraint      solicitud_aplicacion_buses_fk
        foreign key (placa) references buses(placa);
alter table solicitud_aplicacion
    add constraint      solicitud_aplicacion_empleados_fk
        foreign key(idEmpleado) references empleados(idEmpleado);