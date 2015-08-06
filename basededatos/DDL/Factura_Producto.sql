use carrito_compra;
Create table Factura_Producto(
Numero_Factura int not null,
Codigo_Producto smallint not null,
Cantidad_Producto tinyint not null
 CONSTRAINT FK_FactProd_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto)on delete no action on update cascade,
CONSTRAINT FK_FactProd_Factura_NumFact
FOREIGN KEY(Numero_Factura) REFERENCES Factura(Numero_Factura)on delete no action on update cascade
)