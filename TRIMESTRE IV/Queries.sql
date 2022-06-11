#queries & alter tables
USE AZBAN_SB;

#Mostrar clientes
select * from clientes;

#Mostrar clientes quienes hayan sido ingresados al sistema la fecha 2022-01-13
select * from clientes where Fecha_Creacion= '2022-01-13';

#Mostrar todos los tipos de contacto
select * from tipos_contacto;

#Mostrar nombre del tipo de contacto más usado
select  medio_contacto from tipos_contacto limit 1;

#Mostrar todos los cientes quienes se hayan contactado por Instagram ordenados por nombre de cliente 
select * from clientes where id_tipo_contacto = 1 order by nombre asc;

#mostrar todos los productos
select * from productos;

#muestre el producto más vendido 
select nombre from productos limit 1;

#muestre cuántos jogger se han vendido;
select * from detalle_pedido;
select *  from productos;
select sum(cantidad) as cantidad, nombre as Producto from detalle_pedido as d inner join productos as p on d.Id_Producto=p.Id where Id_Producto = 3;

#muestre cuántos buzos capoteros con bolsillos se han vendido en bogota con el nombre del cliente;
select * from direcciones;
select * from pedidos;
select sum(cantidad)as cantidad, ciudad_municipio, nombre as Producto from detalle_pedido as d 
		inner join productos as p on d.Id_Producto=p.Id 
        inner join pedidos as pe on pe.id=d.id_pedido
        inner join direcciones as di on di.id=pe.Id_Direccion_Entrega
		where Id_Producto = 1 and ciudad_municipio='bogota';
        
#muestre el nombre del cliente que tenga el pago completo de su producto
select * from pedidos as p inner join clientes as c on p.id_cliente=c.id
		where fecha_pago_completo is not null;
        
#muestre el monto total de los buzos vendidos a la fecha
select sum(precio_total) as 'Ingresos a Azban' from pedidos;

# muestre qué cantidad de buzos se han vendido con diseño de naruto
select * from detalle_pedido where estampado_principal like '%naruto%';

#eliminar el cliente con numero de documento 84082114
delete from clientes where numero_documento='84082114';

#muestre cuantos buzos capoteros con bolsillo de mujer se vendieron en medellin
select * from pedidos;
select d.genero, sum(d.cantidad)as cantidad, ciudad_municipio, nombre as Producto from detalle_pedido as d 
		inner join productos as p on d.Id_Producto=p.Id 
        inner join pedidos as pe on pe.id=d.id_pedido
        inner join direcciones as di on di.id=pe.Id_Direccion_Entrega
		where Id_Producto = 1 and ciudad_municipio='bucaramanga' and d.genero='mujer';

#moficicar el tipo de dato de nombre de tipo de documento para que permita 100 caracteres.
alter table tipos_documentos modify column Nombre_Tipo_Documento varchar(100) NOT NULL;

#añadir la columna de fecha de cumpleaños por cliente
alter table cliente add column fecha_cumpleaños datetime;

#eliminar la columna de fecha de cumpleaños
alter table cliente drop column fecha_cumpleaños;

