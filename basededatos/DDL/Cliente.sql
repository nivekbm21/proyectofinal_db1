use carrito_compra;
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