use ktkswgfb_bdTienda;

create table cliente(
    id int primary key auto_increment,
    nombre varchar(100),
    correo varchar(100),
    telefono varchar(10),
    direccion varchar(100),
    contrasena varchar(50)
);
