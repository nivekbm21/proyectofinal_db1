use carrito_compra;
Create table Foto(
Codigo tinyint identity(1,1),
Ubicacion varchar(100) not null,
Codigo_Producto smallint not null,
CONSTRAINT PK_Foto_Codigo
PRIMARY KEY (Codigo),
CONSTRAINT FK_Foto_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto) on delete no action on update cascade

)