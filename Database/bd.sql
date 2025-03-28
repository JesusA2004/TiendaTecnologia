create database tienda;
use tienda;

create table cliente(
    id int primary key auto_increment,
    nombre varchar(100),
    correo varchar(100),
    telefono varchar(10),
    direccion varchar(100),
    contrasena varchar(50)
); 

CREATE TABLE quejas (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    tipo ENUM('queja', 'sugerencia', 'observacion') NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

