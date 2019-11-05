CREATE DATABASE cheffy CHARACTER SET utf8 COLLATE utf8_general_ci;

USE cheffy;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
role             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;


CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Cheffy Experience');
INSERT INTO categorias VALUES(null, 'Cheffy Experience VIP');

CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text,
precio          int(255) not null,
oferta          ENUM('si', 'no'),
fecha           date not null,
imagen          varchar(255),
CONSTRAINT pk_categorias PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

INSERT INTO productos VALUES(NULL, 1, 'Servicio 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis quam sapien, sed maximus massa condimentum eget. Praesent eros purus, vehicula vitae nibh pretium, interdum efficitur libero. Nullam laoreet ante tellus, auctor varius lorem molestie vel. Aliquam gravida ex vel lorem congue pretium. Duis vulputate semper libero, id eleifend enim malesuada nec. Suspendisse potenti. Curabitur mattis nec urna id consequat. Proin quis libero eu urna ornare ultricies quis et leo. Pellentesque sit amet blandit nunc. Etiam faucibus mi in magna malesuada congue non ac massa. Sed sit amet nisi arcu. Nulla ultricies, elit vitae tempus vehicula, dui lorem commodo augue, a pellentesque dui nibh a nibh. Nam iaculis enim sit amet dolor finibus tristique. Cras dapibus urna et mattis feugiat.', 50, 'no', CURDATE(), '1.jpg'  );

INSERT INTO productos VALUES(NULL, 2, 'Servicio 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis quam sapien, sed maximus massa condimentum eget. Praesent eros purus, vehicula vitae nibh pretium, interdum efficitur libero. Nullam laoreet ante tellus, auctor varius lorem molestie vel. Aliquam gravida ex vel lorem congue pretium. Duis vulputate semper libero, id eleifend enim malesuada nec. Suspendisse potenti. Curabitur mattis nec urna id consequat. Proin quis libero eu urna ornare ultricies quis et leo. Pellentesque sit amet blandit nunc. Etiam faucibus mi in magna malesuada congue non ac massa. Sed sit amet nisi arcu. Nulla ultricies, elit vitae tempus vehicula, dui lorem commodo augue, a pellentesque dui nibh a nibh. Nam iaculis enim sit amet dolor finibus tristique. Cras dapibus urna et mattis feugiat.', 200, 'no', CURDATE(), '2.jpg'  );

INSERT INTO productos VALUES(NULL, 2, 'Servicio 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis quam sapien, sed maximus massa condimentum eget. Praesent eros purus, vehicula vitae nibh pretium, interdum efficitur libero. Nullam laoreet ante tellus, auctor varius lorem molestie vel. Aliquam gravida ex vel lorem congue pretium. Duis vulputate semper libero, id eleifend enim malesuada nec. Suspendisse potenti. Curabitur mattis nec urna id consequat. Proin quis libero eu urna ornare ultricies quis et leo. Pellentesque sit amet blandit nunc. Etiam faucibus mi in magna malesuada congue non ac massa. Sed sit amet nisi arcu. Nulla ultricies, elit vitae tempus vehicula, dui lorem commodo augue, a pellentesque dui nibh a nibh. Nam iaculis enim sit amet dolor finibus tristique. Cras dapibus urna et mattis feugiat.', 200, 'no', CURDATE(), '3.jpg'  );

CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;



