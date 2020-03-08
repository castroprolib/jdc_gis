-- creando base de datos
create database jdc_gis;

-- tabla countrys
create table countrys(
country_id serial primary key not null,
country varchar(50) not null unique
);

-- tabla states
create table states(
state_id serial primary key not null,
state char not null unique,
country_id integer not null unique
);

-- eliminando columna
alter table states
drop column country_id;

-- agregando columna
alter table states
add column country_id serial;

-- tabla roles
create table roles(
role_id serial primary key not null,
role boolean not null
);

-- tabla coordenadas
create table coord(
coord_id serial primary key not null,
lat point not null,
long point not null,
country_id integer not null,
state_id integer not null
);

-- tabla users
create table users(
user_id serial primary key not null,
first_name varchar(50) not null,
last_name varchar(50) not null,
email varchar(50) not null,
password varchar(100) not null,
role_id integer not null,
country_id integer not null,
state_id integer not null,
created_at date,
updated_at date,
last_access date
);

-- version de postgres instalada
select version();

-- crear extension de postgis, para volver una base de datos espacial
CREATE EXTENSION postgis;

-- verificar la version de postgis instalada
select postgis_full_version();

-- agregando countrys
insert into countrys(country)
values('Argentina'),
('Bolivia'),
('Brasil'),
('Chile'),
('Colombia'),
('Costa Rica'),
('Cuba'),
('Ecuador'),
('El Salvador'),
('Guatemala'),
('Haití'),
('Honduras'),
('México'),
('Nicaragua'),
('Panamá'),
('Paraguay'),
('Perú'),
('República Dominicana'),
('Uruguay'),
('Venezuela');

