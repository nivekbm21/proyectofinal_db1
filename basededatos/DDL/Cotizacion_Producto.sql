use carrito_compra;
Create table Cotizacion_Producto(
Codigo_Producto smallint not null,
Numero_Cotizacion int not null,
Cantidad_Producto tinyint not null
CONSTRAINT FK_CotizProd_Cotizacion_NumCotiz
FOREIGN KEY(Numero_Cotizacion) REFERENCES Cotizacion(Numero_Cotizacion)on delete no action on update cascade,
CONSTRAINT FK_CotizProd_Producto_CodProd
FOREIGN KEY(Codigo_Producto) REFERENCES Producto(Codigo_Producto)on delete no action on update cascade
)