use carrito_compra;
Create table Marca(
Codigo tinyint identity(1,1),
Nombre varchar(15) not null,
CONSTRAINT PK_Marca_Codigo
PRIMARY KEY(Codigo) 
)