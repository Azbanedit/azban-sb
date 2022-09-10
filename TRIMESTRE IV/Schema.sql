#schema database AZBAN_SB
DROP DATABASE IF EXISTS AZBAN_SB;
CREATE DATABASE IF NOT EXISTS AZBAN_SB;
USE AZBAN_SB;
SHOW TABLES FROM AZBAN_SB;
    
CREATE TABLE Tipos_Contacto(
	Id int unsigned auto_increment primary key NOT NULL,
	Medio_Contacto varchar(50) NOT NULL
    );

CREATE TABLE Tipos_Documentos(
	Id int unsigned auto_increment primary key NOT NULL,
	Nombre_Tipo_Documento varchar(50) NOT NULL,
	Abreviatura varchar(10) NOT NULL
    );

CREATE TABLE Genero(
	Id int unsigned auto_increment primary key NOT NULL,
    Nombre varchar(40) NOT NULL
);
    
CREATE TABLE Clientes(
	Id int unsigned auto_increment primary key NOT NULL,
	Nombre varchar(200) NOT NULL,
	Id_Tipo_Documento int unsigned NOT NULL,
	Numero_Documento varchar(50) NOT NULL,
	Celular varchar(20) NOT NULL,
	Id_Tipo_Contacto int unsigned NOT NULL,
	Dato_Tipo_Contacto varchar(20) NOT NULL,
	Email varchar(200) NULL,
	Fecha_Creacion datetime NOT NULL,
    foreign key (Id_Tipo_Documento) references Tipos_Documentos (Id),
    foreign key (Id_Tipo_Contacto) references Tipos_Contacto (Id)
    );
    
CREATE TABLE Productos(
	Id int unsigned auto_increment primary key NOT NULL,
	Nombre varchar(200) NOT NULL,
	Descripcion varchar(1000) NOT NULL,
	Activo boolean NOT NULL default 1,
	Sigla varchar(10) NOT NULL,
	Genero varchar(16) NOT NULL,
    Id_genero int unsigned NOT NULL,
    foreign key (Id_genero) references Genero (Id)
    );
    
CREATE TABLE Medios_Pago(
	Id int unsigned auto_increment primary key NOT NULL,
	Nombre varchar(50) NOT NULL,
	Activo boolean NOT NULL default 1
	);
    
CREATE TABLE Colores(
	Id int unsigned auto_increment primary key NOT NULL,
	Color varchar(20) NOT NULL,
	HexRef char(7) NOT NULL,
	Activo boolean NOT NULL default 1
	);
    
CREATE TABLE Tallas(
	Id int unsigned auto_increment primary key NOT NULL,
	Talla varchar(20) NOT NULL,
	Activo boolean NULL default 1
    );

CREATE TABLE Tallas_X_Producto(
	Id int unsigned auto_increment primary key NOT NULL,
	Id_Producto int unsigned NOT NULL,
	Id_Talla int unsigned NOT NULL,
	Precio int NOT NULL,
	Activo boolean NOT NULL default 1,
    foreign key (Id_Producto) references Productos (Id),
    foreign key (Id_Talla) references Tallas (Id)
    );
    
CREATE TABLE Colores_X_Producto(
	Id int unsigned auto_increment primary key NOT NULL,
	Id_Producto int unsigned NOT NULL,
	Id_Color int unsigned NOT NULL,
	Activo boolean NOT NULL default 1,
    foreign key (Id_Producto) references Productos (Id),
	foreign key (Id_Color) references Colores (Id)
    );
    

CREATE TABLE Departamentos(
	Id int unsigned auto_increment primary key NOT NULL,
	Nombre varchar(50) NOT NULL,
	Codigo char(2) NOT NULL 
    );

CREATE TABLE Direcciones(
	Id int unsigned auto_increment primary key NOT NULL,
	Direccion varchar(200) NOT NULL,
	Id_Cliente int unsigned NOT NULL,
	Activo boolean NOT NULL default 1,
	Id_Departamento int unsigned NOT NULL,
	Ciudad_Municipio varchar(200) NOT NULL,
	Destinatario varchar(200) NOT NULL,
	Celular_Destinatario varchar(20) NOT NULL,
    foreign key (Id_Cliente) references Clientes (Id),
    foreign key (Id_Departamento) references Departamentos (Id)
	);
    
CREATE TABLE Estado_Pedido(
	Id int unsigned auto_increment primary key NOT NULL,
	Estado varchar(50) NOT NULL,
	Activo boolean NOT NULL default 1
    );
    
    
CREATE TABLE Pedidos(
	Id int unsigned auto_increment primary key NOT NULL,
	Fecha_Creacion datetime NOT NULL,
	Fecha_Envio datetime NULL,
	Id_Cliente int unsigned NOT NULL,
	Id_Estado_Pedido int unsigned NOT NULL,
	Id_Direccion_Entrega int unsigned NOT NULL,
	Descuentos int NOT NULL default 0,
	Precio_Total int NOT NULL,
	Abono int NOT NULL,
	Abonado boolean NOT NULL,
	Pagado boolean NOT NULL,
	Id_Medio_Pago int unsigned NOT NULL,
	Fecha_Pago_Completo datetime NULL,
    foreign key (Id_Cliente) references Clientes (Id),
    foreign key (Id_Direccion_Entrega) references Direcciones (Id),
    foreign key (Id_Estado_Pedido) references Estado_Pedido (Id),
    foreign key (Id_Medio_Pago) references Medios_Pago (Id)
    );
    
    
CREATE TABLE Detalle_Pedido(
	Id int unsigned auto_increment primary key NOT NULL,
	Id_Pedido int unsigned NOT NULL,
	Id_Producto int unsigned NOT NULL,
	Id_Color int unsigned NOT NULL,
	Id_Talla int unsigned NOT NULL,
	Estampado_Principal varchar(200) NULL,
	Estampado_Secundario varchar(200) NULL,
	Observaciones varchar(200) NULL,
	Cantidad smallint NOT NULL,
	Precio int NOT NULL,
	Incremento_Precio int NOT NULL default 0,
	Genero varchar(12) NOT NULL,
	Producto_Base boolean NOT NULL,
    foreign key (Id_Pedido) references Pedidos (Id),
    foreign key (Id_Producto) references Productos (Id)
	);
    

