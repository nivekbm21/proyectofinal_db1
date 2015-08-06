use carrito_compra;
Create table Carrito_Compras(
Codigo_Cliente tinyint not null,
Codigo_Producto smallint not null,
Cantidad_Producto tinyint,
CONSTRAINT PK_CarritoCompras_CodCliente
PRIMARY KEY (Codigo_Cliente),
CONSTRAINT FK_CarritoComp_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto)on delete no action on update cascade,
CONSTRAINT FK_CarritoComp_Cliente_CodClie
FOREIGN KEY(Codigo_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
)