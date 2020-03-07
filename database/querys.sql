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

-- tabla roles
create table roles(
role_id serial primary key not null,
role boolean not null
);


