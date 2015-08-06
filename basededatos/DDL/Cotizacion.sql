use carrito_compra;
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