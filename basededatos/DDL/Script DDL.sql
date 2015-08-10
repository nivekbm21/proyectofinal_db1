create database carrito;

go
use carrito;

Create table Categoria(
Codigo tinyint identity(1,1),
Descripcion varchar(20),
Foto varchar(50)
CONSTRAINT PK_Categoria_Codigo
PRIMARY KEY (Codigo)

)


Create table Marca(
Codigo tinyint identity(1,1),
Nombre varchar(15) not null,
CONSTRAINT PK_Marca_Codigo
PRIMARY KEY(Codigo) 
)

Create table Producto(
Codigo_Producto smallint identity(1,1),
Caracteristica varchar(20) not null,
Nombre varchar(15) not null,
Precio smallint not null,
Descripcion varchar(100) not null,
Existencia tinyint not null,
Estado varchar(10) not null,
Cod_Marca tinyint not null,
Cod_Categoria tinyint not null,
Foto varchar(50)
CONSTRAINT PK_Producto_CodProd
PRIMARY KEY (Codigo_Producto),
CONSTRAINT FK_Producto_Marca_CodMarca
FOREIGN KEY(Cod_Marca) REFERENCES Marca(Codigo)on delete no action on update cascade,
CONSTRAINT FK_Producto_Categoria_CodCat
FOREIGN KEY(Cod_Categoria) REFERENCES Categoria(Codigo) on delete no action on update cascade
)

create table Cliente(
	Codigo tinyint identity(1,1),
	Nombre varchar(15) not null,
	Primer_Apellido varchar(15) not null,
	Segundo_Apellido varchar(15) not null,
	Usuario char(10) not null,
	Contrasena varchar(15) not null,
	Correo varchar(30) not null,
	Fecha_Nacimiento date not null,
	CONSTRAINT PK_Cliente_Codigo
	PRIMARY KEY(Codigo)
	
)
Create table Direccion_Envio
(
Codigo tinyint identity(1,1),
Pais varchar(15) not null,
Ubicacion_Especifica varchar(50) not null,
Codigo_Postal varchar(8) not null,
Canton varchar(15) not null,
Codigo_Cliente tinyint not null,
Provincia varchar(20) not null,
CONSTRAINT PK_DirecEnvio_Codigo
PRIMARY KEY (Codigo),
CONSTRAINT FK_DirecEnvio_Cliente_CodClie
FOREIGN KEY(Codigo_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
 

)

Create table Carrito_Compras(
Codigo_Cliente tinyint not null,
Codigo_Producto smallint not null,
Cantidad_Producto tinyint,
CONSTRAINT FK_CarritoComp_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto)on delete no action on update cascade,
CONSTRAINT FK_CarritoComp_Cliente_CodClie
FOREIGN KEY(Codigo_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
)

Create table Cotizacion(
Numero_Cotizacion int identity(1,1),
Fecha_Solicitud date not null,
Fecha_Validez date not null,
Cod_Cliente tinyint not null,
CONSTRAINT PK_Cotizacion_NumCotizacion
PRIMARY KEY(Numero_Cotizacion),
CONSTRAINT FK_Cotizacion_Cliente_CodCliente
FOREIGN KEY(Cod_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
)
Create table Factura(
Numero_Factura int identity(1,1),
Fecha date not null,
Codigo_Cliente tinyint not null,
CONSTRAINT PK_Factura_NumFactura
PRIMARY KEY(Numero_Factura),
CONSTRAINT FK_Factura_Cliente_CodClie
FOREIGN KEY(Codigo_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
)

Create table Foto(
Codigo tinyint identity(1,1),
Ubicacion varchar(100) not null,
Codigo_Producto smallint not null,
CONSTRAINT PK_Foto_Codigo
PRIMARY KEY (Codigo),
CONSTRAINT FK_Foto_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto) on delete no action on update cascade

)


Create table Cotizacion_Producto(
Codigo_Producto smallint not null,
Numero_Cotizacion int not null,
Cantidad_Producto tinyint not null
CONSTRAINT FK_CotizProd_Cotizacion_NumCotiz
FOREIGN KEY(Numero_Cotizacion) REFERENCES Cotizacion(Numero_Cotizacion)on delete no action on update cascade,
CONSTRAINT FK_CotizProd_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto)on delete no action on update cascade
)


Create table Factura_Producto(
Numero_Factura int not null,
Codigo_Producto smallint not null,
Cantidad_Producto tinyint not null
 CONSTRAINT FK_FactProd_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto)on delete no action on update cascade,
CONSTRAINT FK_FactProd_Factura_NumFact
FOREIGN KEY(Numero_Factura) REFERENCES Factura(Numero_Factura)on delete no action on update cascade
)


---------------------------modificaciones----------------------------


alter table Factura_Producto add  Precio int 
alter table Factura_Producto add  Total int 

alter table Carrito_Compras add  Precio int 
alter table Carrito_Compras add  Total int 

alter table Direccion_Envio add Numero_Factura int

alter table Direccion_Envio
add constraint FK_DireccionEnvio_Factura_NumeroFactura
foreign key(Numero_Factura) references Factura(Numero_Factura)

alter table Direccion_Envio drop constraint FK_DirecEnvio_Cliente_CodClie

create table roles(
id tinyint identity(1,1),
Nombre varchar(30) not null
constraint pk_roles_id
primary key(id)
)

alter table Cliente add Rol tinyint 

alter table Cliente 
add constraint fk_cliente_roles_id
foreign key(Rol) references roles(id)

alter table Cliente add  Estado char(1)
go
---------------------------------------

create view detalle
as
select p.*,m.nombre as Marca,c.descripcion as Categoria from producto p join Marca m on p.Cod_Marca=m.Codigo join Categoria c on p.Cod_Categoria=c.Codigo
go

CREATE VIEW carrito
AS
SELECT     ca.Codigo_Cliente, p.Nombre, ca.Cantidad_Producto, ca.Precio, ca.Total, ca.Codigo_Producto
FROM         dbo.Carrito_Compras AS ca INNER JOIN
                      dbo.Producto AS p ON ca.Codigo_Producto = p.Codigo_Producto

GO
