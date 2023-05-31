CREATE DATABASE IF NOT EXISTS  Almacen;
use almacen;
create table Productos(
    Id int PRIMARY key AUTO_INCREMENT,
    Nombre varchar(120),
    Precio float,
    Existencias Int
);