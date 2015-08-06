use carrito_compra;
Create table Factura(
Numero_Factura int identity(1,1),
Fecha date not null,
Codigo_Cliente tinyint not null,
CONSTRAINT PK_Factura_NumFactura
PRIMARY KEY(Numero_Factura),
CONSTRAINT FK_Factura_Cliente_CodClie
FOREIGN KEY(Codigo_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
)