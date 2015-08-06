use carrito_compra;
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