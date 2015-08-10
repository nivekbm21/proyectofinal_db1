alter table Factura_Producto add  Precio int 
alter table Factura_Producto add  Total int 

alter table Carrito_Compras add  Precio int 
alter table Carrito_Compras add  Total int 

alter table Direccion_Envio add Numero_Factura int

alter table Direccion_Envio
add constraint FK_DireccionEnvio_Factura_NumeroFactura
foreign key(Numero_Factura) references Factura(Numero_Factura)

alter table Direccion_Envio drop constraint FK_DirecEnvio_Cliente_CodClie

create table roles(
id tinyint identity(1,1),
Nombre varchar not null
constraint pk_roles_id
primary key(id)
)

alter table Cliente add Rol tinyint 

alter table Cliente 
add constraint fk_cliente_roles_id
foreign key(Rol) references roles(id)

Create PROCEDURE consultaCarrito 
AS
BEGIN
 SELECT ca.Codigo_Cliente,p.Nombre,ca.Cantidad_Producto,ca.Precio,ca.Total FROM Carrito_Compras ca join Producto p on ca.Codigo_Producto=p.Codigo_Producto
END


alter table Cliente add  Estado char(1)
