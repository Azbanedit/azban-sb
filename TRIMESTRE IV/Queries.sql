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
#muestre cuántos buzos capoteros con bolsillos se han vendido en medellin;
select * from direcciones;
select * from pedidos;
select sum(cantidad)as cantidad, ciudad_municipio, nombre as Producto from detalle_pedido as d 
		inner join productos as p on d.Id_Producto=p.Id 
        inner join pedidos as pe on pe.id=d.id_pedido
        inner join direcciones as di on di.id=pe.Id_Direccion_Entrega
		where Id_Producto = 1 and ciudad_municipio='bogota';



