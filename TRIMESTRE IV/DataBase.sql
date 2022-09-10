#Data database AZBAN_SB
USE AZBAN_SB;
INSERT INTO Colores (Color, HexRef) 
	VALUES ('Negro', '#000000'),
			('Blanco', '#FFFFFF'),
			('Gris Claro', '#DADADA'),
			('Gris Oscuro', '#878787'),
			('Lila', '#D381F2'),
			('Verde Menta', '#81F2C9'),
			('Azul Oscuro', '#021C50'),
			('Azul Rey', '#043AA5'),
			('Rojo', '#E40000'),
			('Amarillo Mostaza', '#F7CE00'),
            ('Rosado', '#FF81BC'),
            ('Palo de Rosa', '#F06E92'),
            ('Vinotinto', '#7C0F2E'),
            ('Beige (Camel)', '#E6D985');
            
INSERT INTO Departamentos (Nombre, Codigo) 
	VALUES ('Antioquia', '05'),
			('Atlantico', '08'),
			('Bogotá', '11'),
			('Bolivar', '13'),
			('Boyacá', '15'),
			('Caldas', '17'),
			('Caqueta', '18'),
			('Cauca ', '19'),
			('Cesar', '20'),
			('Cordoba', '23'),
			('Cundinamarca', '25'),
			('Choco', '27'),
			('Huila', '41'),
			('Guajira', '44'),
			('Magdalena ', '47'),
			('Meta ', '50'),
			('Nariño', '52'),
			('N.Santander', '54'),
			('Quindio', '63'),
			('Risaralda', '66'),
			('Santander', '68'),
			('Sucre', '70'),
			('Tolima', '73'),
			('Valle del Cauca', '76'),
			('Arauca', '81'),
			('Casanare', '85'),
			('putumayo', '86'),
			('San Andres', '88'),
			('Amazonas ', '91'),
			('Guainia ', '94'),
			('Guaviare', '95'),
			('Vaupes', '97'),
			('Vichada', '99');

INSERT INTO Productos (Nombre, Descripcion, Sigla, Genero) 
	VALUES ('Buzo Cap. Con B', 'Buzo capotero con o sin bolsillo delantero. Fabricado en algodon perchado monaco', 'BCC', 'UNISEX'),
			('Buzo C. Redondo Con B', 'Buzo cuello redondo' , 'BCRC', 'UNISEX'),
            ('Jogger', 'Jogger en algodon perchado' , 'JOG', 'DAMA'),
            ('Crop Top', 'Crop Top en Algodon Perchado', 'CTP', 'DAMA'),
            ('Camiseta', 'Camiseta básica' , 'CAM', 'UNISEX'),
            ('Buzo Capotero Sin Estampado', 'Buzo Capotero Sin Estampado', 'BSE', 'UNISEX'),
            ('Buzo Cap. Sin B', 'Buzo Capotero Sin Bolsillo' , 'BCS', 'UNISEX'),
            ('Buzo C. Redonco Sin B', 'Buzo Cuello Redondo Sin Bolsillo' , 'BCRS', 'UNISEX');

INSERT INTO Tallas (Talla) 
	VALUES ('L'),
			('M'),
			('S'),
			('XS'),
			('14'),
			('12'),
			('10'),
			('8'),
			('6'),
			('4'),
			('2'),
			('XL'),
			('XXL'),
			('XXXL');

INSERT INTO Tipos_Contacto (Medio_Contacto) 
	VALUES ('Instagram'),
			('Whatsapp'),
			('Facebook'),
			('Personal');
            
INSERT INTO Tipos_Documentos (Nombre_Tipo_Documento, Abreviatura) 
	VALUES ('Cédula de Ciudadania', 'CC'),
			('Cédula de Extrangería', 'CE'),
			('Pasaporte', 'PA'),
			('Tarjeta de Identidad', 'TI');
            
INSERT INTO Medios_Pago (Nombre) 
	VALUES ('Nequi'),
			('Daviplata'),
			('Banco de Bogotá'),
			('Efecty'),
			('Otro');

INSERT INTO Estado_Pedido (Estado) 
	VALUES ('Creado'),
			('Producción'),
            ('Listo Para Entrega'),
            ('Enviado'),
            ('Devolución'),
            ('Cancelado');
select * from colores;#200 al 229
select * from clientes;
select * from Tipos_Contacto;
select * from Tipos_Documentos;

INSERT INTO CLIENTES (Nombre, Id_Tipo_Documento, Numero_Documento, Celular, Id_Tipo_Contacto, Dato_Tipo_Contacto, Email, Fecha_creacion)
	VALUES ('Claudia Santos', 1, '63539510', '3174048518', 2, '3174048518', 'claudia@gmail.com','2022-01-07 13:48'),
			('José Pestana', 1, '1104874194', '3135496552', 2, '3135496552', 'pestana@hotmail.com', '2022-01-07 14:47'),
            ('Jonathan Gómez', 1, '1144132600', '3157096164', 1, 'jowhas', 'jonathan@gmail.com', '2022-01-07 15:13' ),
            ('Briyith Rodríguez', 1, '1003516283', '3006970171', 1, 'briyith26rodriguez', 'briyith@gmail.com','2022-01-07 17:05'),
            ('Carlos Torres', 1, '80024684', '3214716192', 1, 'catministry ', 'carlos@yahoo.com','2022-01-07 17:53' ),
            ('Niyireth Gutiérrez', 1, '53071515', '3123000672', 1, 'niyeyita', 'niyireth@gmail.com', '2022-01-07 20:40'),
            ('Sandra Huérfano', 1, '52346557', '3125548548', 1, 'sandrapatriciahuerfa', 'sandra@hotmail.com', '2022-01-11 13:04'),
            ('Luisa Parra', 1, '1000336745', '3223102263', 1, 'luisa_parra', 'luisa@gmail.com', '2022-01-11 13:53'),
            ('Yohana polo', 1, '49717087', '3028670161', 1, '2johanna_tovar', 'yohana@gmail.com', '2022-01-11 17:12'),
            ('Jose Bello', 1, '80879568', '3127740109', 2, '3126165520', 'jose@gmail.com','2022-01-11 20:31'),
            ('Andrea Bedoya', 1, '1006287179', '3166642909', 2, '3166642909', 'andrea@gmail.com','2022-01-11 21:43'),
            ('Haider Calderón', 1, '1096955809', '3204047905', 1, '3204047905', 'haider@gmail.com', '2022-01-12 13:47'),
            ('Alejandra George', 1, '1000398128', '3147173523', 2, '3147173523', 'alejandra@gmail.com', '2022-01-12 19:11'),
            ('Daniela Prieto', 1, '1032489028', '3214250323', 1, 'j.alexis_950922', 'daniela@gmail.com', '2022-01-13 14:06'),
            ('Paola Rojas', 1, '1092334130', '3124426464', 2, '3124426464', 'paola@gmail.com', '2022-01-13 14:37'),
            ('Sebastian molina', 1, '1000347068', '3017147897', 2, ' 3017147897', 'sebastian@gmail.com', '2022-01-13 17:50'),
            ('Stefania Torres', 1, '1072073837', '3108109536', 2, '3108109536', 'stefania@hotmail.com', '2022-01-13 19:43'),
            ('Camilo Betancur', 1, '1035851306', '3116221629', 2, '3116221629', 'camilo@gmail.com', '2022-01-13 22:23'),
            ('Andrea Martínez', 1, '1000269202', '3212418505', 2, ' 321 2418505', 'andreamartinez@gmail.com', '2022-01-14 13:43'),
            ('Alexander Ardila', 1, '1233898601', '3209296978', 2, '3209296978', 'alexander@gmail.com', '2022-01-14 17:03'),
            ('Miguel correa', 1, '1037267092', '3147759500', 1, 'jose.correa.589100', 'miguel@hotmail.com', '2022-01-14 17:27'),
            ('Diana Gaviria', 1, '1018433897', '3102367799', 2, '3102367799', 'diana@gmail.com', '2022-01-14 17:42'),
            ('Julian moreno', 1, '1112882183', '3187227442', 1, 'jmorenogameplay', 'julian@gmail.com','2022-01-14 20:45'),
            ('Olga marin ', 1, '1112300315', '3215009688', 2, '3215009688', 'olga@gmail.com', '2022-01-14 22:47' ),
            ('Helen Murillo', 1, '1112492555', '3166829198', 1, 'hgsm2109', 'helen@hotmail.com', '2022-01-14 22:52'),
            ('Leandro Pérez', 1, '1057600895', '3118062623', 2, ' 3118062623', 'leandro@gmail.com', '2022-01-17 14:49'),
            ('Andrea alvarez', 1, '1007587838', '3138658483', 1, 'yuly1829', 'andreaalvarez@gmail.com', '2022-01-17 14:57'),
            ('Raul Diaz', 1, '84082114', '3205777774', 2, '3205777774', 'raul@gmail.com', '2022-01-17 15:13');
select * from clientes;
            
INSERT INTO Direcciones (Direccion, Id_Cliente, Id_Departamento, Ciudad_Municipio, Destinatario, Celular_Destinatario)
	VALUES  ('Calle 9 # 25 - 26', 1, 24, 'Bucaramanga ', 'Claudia Santos', '3174048518'),
            ('Carrera 109 a #64d-29', 2, 3, 'Bogotá ', 'José Pestana', '3135496552'),
            ('Cra4 c #59 c bis 17', 3, 27, 'Cali', 'Jonathan Gómez', '3157096164'),
            ('Cra8c 39a 53', 4, 12, 'Soacha ', 'Briyith Rodríguez', '3006970171'),
            ('Calle 2 #93D', 5, 3, 'Bogotá', 'Carlos Torres ', '3214716192'),
            ('Carrera 72B N 6D 72', 6, 3, 'Bogotá', 'Niyireth Gutiérrez', '3123000672'),
            ('Cra 136a #151b-52', 7, 3, 'Bogotá', 'Sandra Huérfano', '3125548548'),
            ('Transversal 13 #38c-58', 8, 12, 'Soacha', 'Luisa Parra', '3223102263'),
            ('Diagonal 19a # 19d 42', 9, 9, 'Valledupar ', 'Yohana polo', '3028670161'),
            ('Carrera 3 # 1c - 92', 10, 3, 'Bogotá', 'Ivonne Suárez', '3127740109'),
            ('Cra 4 # 6 - 74', 11, 1, 'Medellín ', 'Andrea Bedoya', '3166642909'),
            ('Calle 111#32-64', 12, 27, 'Cali', 'Haider Calderón', '3204047905'),
            ('Carrera 35a #99-25', 13, 1, 'Medellín ', 'Alejandra George', '3147173523'),
            ('CLL 69 v sur # 18 r 32', 14, 3, 'Bogotá', 'Daniela Prieto', '3214250323'),
            ('Carrera 5 # 19 - 08 ', 15, 24, 'Bucaramanga', 'Paola Rojas', '3124426464'),
            ('avenida calle 24 #36-5', 16, 3, 'Bogotá', 'Sebastian molina', '3017147897'),
            ('Cra 3 #8-30', 17, 27, 'Cali', 'Stefania Torres', '3108109536'),
            ('Cra 5 #6-30', 18, 24, 'Bucaramanga', 'Camilo Betancur', '3116221629'),
            ('Calle 64  # 70 C - 41', 19, 3, 'Bogotá','Andrea Martínez', '3212418505'),
            ('Kr 154#134-04 ', 20, 3, 'Bogotá', 'Alexander Ardila', '3209296978'),
            ('Carrera 2 a No 9 43 ', 21, 27, 'Cali', 'Miguel correa', '3147759500'),
            ('Carrera 25 a No 39 43 SUR', 22, 3, 'Bogotá', 'Diana Gaviria', '3102367799'),
            ('Carrera 8A 24A-46', 23, 24, 'Bucaramanga', 'Julian moreno', '3187227442'),
            ('Cra 47b #46-13', 24, 27, 'Cali', 'Olga marin ', '3215009688'),
            ('Carrera 1 a sur # 6-85', 25,  1, 'Medellín ', 'Helen Murillo', '3166829198'),
            ('Calle 13 #2 - 21', 26, 24, 'Bucaramanga', 'Leandro Pérez', '3118062623'),
            ('Calle 57 f # 77 70', 27, 3, 'Bogotá', 'andrea alvarez','3138658483'),
            ('Calle 6# 9-92', 28, 3, 'Bogotá', 'Raul Diaz ', '3205777774');
select * from direcciones;
INSERT Pedidos (Fecha_Creacion, Fecha_Envio, Id_Cliente, Id_Estado_Pedido, Id_Direccion_Entrega, Precio_Total, Abono, Abonado, Pagado, Id_Medio_Pago , Fecha_Pago_Completo) 
	VALUES  ('2022-01-07 14:49', '2022-01-10 14:49', 1, 1, 1, 67500, 67500, 0, 1, 2, NULL),
			('2022-01-07 15:00', '2022-01-10 15:00', 2, 1, 2, 135000, 70000, 1, 0, 1, '2022-01-14 19:22'),
			('2022-01-07 15:14', '2022-01-10 15:14', 3, 2, 3, 67500, 30000, 1, 0, 3, '2022-01-12 22:58'),
			('2022-01-07 17:12', '2022-01-10 17:12', 4, 2, 4, 67500, 67500, 0, 1, 4, NULL),
			('2022-01-07 17:41', '2022-01-10 17:41', 5, 3, 5, 67500, 67500, 0, 1, 5, NULL),
			('2022-01-07 17:54', '2022-01-10 17:54', 6, 3, 6, 67500, 67500, 0, 1, 1, NULL),
			('2022-01-07 20:42', '2022-01-10 20:42', 7, 4, 7, 67500, 34500, 1, 0, 2,'2022-01-13 21:51'),
			('2022-01-11 13:06', '2022-01-14 13:06', 8, 4, 8, 67500, 67500, 0, 1, 3, NULL),
			('2022-01-11 13:54', '2022-01-14 13:54', 9, 5, 9, 67500, 34000, 1, 0, 4,'2022-01-14 19:45'),
			('2022-01-11 16:58', '2022-01-14 16:58', 10, 5, 10, 54000, 54000, 0, 1, 5, NULL),
			('2022-01-11 20:37', '2022-01-14 20:37', 11, 6, 11, 67500, 34000, 1, 0, 5, '2022-01-18 21:55'),
			('2022-01-11 21:48', '2022-01-14 21:48', 12, 6, 12, 74000, 50000, 1, 0, 4,'2022-01-27 13:48'),
			('2022-01-12 13:48', '2022-01-15 13:48', 13, 1, 13, 67500, 37500, 1, 0, 1, '2022-01-19 22:33'),
			('2022-01-12 19:13', '2022-01-15 19:13', 14, 2, 14, 135000, 67000, 1, 0, 3, '2022-01-18 21:24'),
			('2022-01-13 14:08', '2022-01-16 14:08', 15, 1, 15, 67500, 40000, 1, 1, 2, '2022-01-18 21:18'),
			('2022-01-13 14:48', '2022-01-16 14:48', 16, 2, 16, 67500, 34000, 1, 1, 2, '2022-01-19 14:46'),
			('2022-01-13 17:54', '2022-01-16 17:54', 17, 3, 17, 74000, 50000, 1, 1, 3, '2022-01-19 22:33'),
			('2022-01-13 20:07', '2022-01-16 20:07', 18, 4, 18, 135000, 67000, 1, 1, 1, '2022-01-19 20:51'),
			('2022-01-13 22:31', '2022-01-16 22:31', 19, 3, 19, 135000, 70000, 1, 1, 1, '2022-01-19 21:13'),
			('2022-01-14 13:45', '2022-01-17 13:45', 20, 4, 20, 74000, 74000, 0, 1, 2, NULL),
			('2022-01-14 17:10', '2022-01-17 17:10', 21, 1, 21, 148000, 74000, 1, 1, 3, '2022-01-26 18:25'),
			('2022-01-14 17:30', '2022-01-17 17:30', 22, 1, 22, 67500, 40000, 1, 1, 1, '2022-01-19 21:34'),
			('2022-01-14 17:46', '2022-01-17 17:46', 23, 2, 23, 67500, 34000, 1, 0, 3, '2022-01-21 13:12'),
			('2022-01-14 21:17', '2022-01-17 21:17', 24, 2, 24, 67500, 34000, 1, 0, 4, '2022-01-24 20:05'),
			('2022-01-14 08:48', '2022-01-17 22:48', 25, 3, 25, 67500, 67500, 0, 0, 1, NULL),
			('2022-01-14 22:53', '2022-01-17 22:50', 26, 3, 26, 67500, 33750, 1, 1, 2, '2022-01-21 13:06'),
			('2022-01-17 14:51', '2022-01-20 14:51', 27, 4, 27, 189000, 135000, 1, 1, 1, '2022-01-17 16:05'),
			('2022-01-17 15:26', '2022-01-20 15:26', 28, 4, 28, 141500, 100000, 1, 1, 1, '2022-01-20 22:06');
select * from pedidos;
INSERT Detalle_Pedido (Id_Pedido, Id_Producto, Id_Color, Id_Talla, Estampado_Principal, Estampado_Secundario, Observaciones, Cantidad, Precio, Incremento_Precio, Genero, Producto_Base) 
	VALUES (1, 1, 2, 3, 'Naruto', NULL, NULL, 1, 67500 , 0, 'Mujer', 1),
    (2, 1, 2, 3, 'astronauta ', 'luna', 'Sin casco', 1, 67500 , 0, 'Mujer', 0),
    (2, 1, 5, 3, 'oso ', NULL, 'Más pequeño en la espalda', 1, 67500 , 0, 'Mujer', 0),
    (3, 1, 13, 2, 'chavo del 8', NULL, NULL , 1, 67500 , 5000, 'Hombre', 1),
    (4, 1, 5, 2, 'sol ', 'luna', 'Nombre grande', 1, 67500 , 0, 'Mujer', 1),
    (5, 1, 10, 4, 'Naruto ', NULL, 'Nombre pequeño ', 1,67500 , 0, 'Hombre', 0),
    (6, 1, 2, 2, 'bts', NULL, 'con letra bts', 1,67500 , 0, 'Mujer', 0),
    (7, 1, 9, 2, 'Harry potter', NULL, NULL, 1,61000 , 5000, 'Mujer', 1),
    (8, 1, 5, 4, 'astronauta', 'Nombre Daniela', NULL, 1, 67500 , 0, 'Mujer', 0),
    (9, 8, 1, 4, 'Naruto', NULL, 'Tipo pixel', 1, 67500 , 0, 'Hombre', 0),
    (10, 3, 7, 3, 'corazon', NULL, 'poner debajo del corazon las letras te amo', 1, 72500, 0, 'Mujer', 0),
    (11, 3, 7, 2, 'sol ', NULL, 'poner debajo del sol las letras te amo', 1, 72500 ,0, 'Hombre', 1),
    (12, 3, 12, 4, 'hello kity', NULL, NULL, 1, 72500, 0, 'Mujer', 0),
    (13, 4, 8, 9, 'Bart', NULL, 'poner nombre Maria según la imagen previa', 1, 61000, 0, 'Niño', 1),
    (14, 4, 1, 3, 'naruto', NULL, 'Imagen centrada', 1, 61000, 5000, 'Hombre', 1),
    (14, 4, 1, 4, 'walli ', NULL, 'Con fondo', 1, 61000 , 0, 'Hombre', 0),
    (15, 4, 11, 4, 'Ave', NULL, 'Cordones rojos', 1, 61000 ,0, 'Mujer', 1),
    (16, 1, 2, 2, 'naruto', NULL, 'Como la imagen enviada ', 1, 67500 , 0, 'Mujer', 0),
    (17, 8, 3, 3, 'Walking Dad', NULL, NULL, 1,67500 ,0 , 'Hombre', 1),
    (18, 5, 2, 2, 'hombre araña ', 'telaraña', 'sin el nombre en la manga ', 1, 74500 , 0, 'Mujer', 1),
    (18, 5, 12, 12, 'Hakuna matata', NULL, 'poner las hojas en la manga ', 1,74500 , 0, 'Mujer', 0),
    (19, 5, 6, 12, 'hakuna matata', NULL, 'poner las hojas  en la manga ', 1,74500 , 0, 'Mujer', 0),
    (19, 7, 5, 1, 'hakuna matata', NULL, 'poner las hojas en la manga ', 1, 58000 , 0, 'Mujer', 0),
    (20, 7, 8, 6, 'hakuna matata', NULL, 'no poner nada en la manga ', 1,58000 , 0, 'Niño', 1),
    (21, 6, 7, 13, 'hakuna matata', NULL, NULL, 1, 53500 , 0, 'Hombre', 0),
    (21, 6, 1, 14, 'hakuna matata', NULL, NULL, 1,53500 , 0, 'Hombre', 0),
    (22, 6, 4, 2, 'hakuna matata', NULL, NULL, 1,53500 , 0, 'Hombre', 1),
    (23, 6, 1, 1, 'cobra', NULL, NULL, 1, 53500, 5000, 'Hombre', 0),
    (24, 6, 1, 1, 'flor', 'pasto', NULL, 1, 53500, 5000, 'Niño', 1),
    (25, 6, 1, 1, 'rosa', NULL, NULL, 1, 53500, 5000, 'Hombre', 1),
    (26, 6, 1, 1, 'cobra', NULL, NULL, 1, 53500, 5000, 'Niño', 0),
    (27, 6, 1, 1, 'balon', 'nombre Alex', NULL, 1, 53500, 5000, 'Hombre', 0),
    (27, 6, 1, 1, 'tabla', NULL, NULL, 1, 53500, 5000, 'Hombre', 1),
    (27, 6, 1, 1, 'pluma', NULL, NULL, 1, 53500, 5000, 'Niño', 0),
    (28, 6, 1, 1, 'super heroe', 'nombre Super man', NULL, 1, 53500, 5000, 'Mujer', 1),
    (28, 6, 1, 1, 'goku', NULL, NULL, 1, 53500, 5000, 'Mujer', 1);
    
select * from estado_pedido;

INSERT Genero (Nombre)
	VALUES	('Femenino'),
			('Masculino'),
			('Niño'),
			('Unisex');
#Colores
#Departamentos
#Producto
#talla
#Tipos_Contacto
#tipos_documento
#Medios_Pago
#estado_pedido
#clientes
#direcciones
#pedidos
#detalle_pedido
#historial_pedidos

#coloresxproductos
#tallas_x_producto

show tables from azban_sb;
