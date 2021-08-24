CREATE DATABASE NesTextil;

use NesTextil;

CREATE TABLE Cliente
(
Cedula int not null ,
Nombre varchar (100) not null,
Apellido varchar (100) not null,
Email varchar (100) not null,
Telefono int,
Direccion varchar (50) not null,
Ciudad varchar (50) not null,
Password varchar (100) not null,
PRIMARY KEY (Cedula)
);

CREATE TABLE Venta
(
Id int not null AUTO_INCREMENT,
Fecha int not null,
Monto_total Float not null,
ClienteCedula int not null,
PRIMARY KEY (Id),
FOREIGN KEY (ClienteCedula) REFERENCES Cliente(Cedula)
);

CREATE TABLE Categoria
(
IdCategoria int not null AUTO_INCREMENT,
Nombre varchar (40) not null,
Descripcion varchar (60) not null,
PRIMARY KEY (IdCategoria)
);

CREATE TABLE Producto
(
IdProducto int not null AUTO_INCREMENT,
NombreProducto varchar (40) not null,
Nombre_Proveedor varchar (30) not null,
Stock int not null,
CategoriaId int not null,
PRIMARY KEY (IdProducto),
FOREIGN KEY (CategoriaId) REFERENCES Categoria(IdCategoria)
);

CREATE TABLE Ventas_Producto
(
IdVentas_Producto int not null AUTO_INCREMENT,
IdVenta int not null,
IdProducto int not null,
PRIMARY KEY (IdVentas_Producto),
FOREIGN KEY (IdVenta) REFERENCES Venta(Id),
FOREIGN KEY (IdProducto) REFERENCES Producto(IdProducto)
);

CREATE TABLE Newsletter
(
IdNewsletter int not null AUTO_INCREMENT,
Email varchar (150) not null,
PRIMARY KEY (IdNewsletter)
);

