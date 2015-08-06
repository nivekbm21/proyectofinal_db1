use carrito_compra;
Create table Categoria(
Codigo tinyint identity(1,1),
Descripcion varchar(20),
Foto varchar(50)
CONSTRAINT PK_Categoria_Codigo
PRIMARY KEY (Codigo)

)