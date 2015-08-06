use carrito_compra;
Create table Direccion_Envio
(
Codigo tinyint identity(1,1),
Pais varchar(15) not null,
Ubicacion_Especifica varchar(50) not null,
Codigo_Postal varchar(8) not null,
Canton varchar(15) not null,
Codigo_Cliente tinyint not null,
Provincia varchar(20) not null,
CONSTRAINT PK_DirecEnvio_Codigo
PRIMARY KEY (Codigo),
CONSTRAINT FK_DirecEnvio_Cliente_CodClie
FOREIGN KEY(Codigo_Cliente) REFERENCES Cliente(Codigo)on delete no action on update cascade
 

)