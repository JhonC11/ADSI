#Iniciar linea de comandos de MySQL

cd c/xampp/mysql/bin --> mysql -u root -p

# Ver bases de datos
show databases;

# Crear base de datos
create database 'nombre de la base de datos';

# Usar base de datos
use 'nombresabededatos';

# Conectarse a una base de datos
connect 'nombresabededatos'

#ver tablas de la base de datos
show tables;

# Crear tabla
MariaDB [adsi1132816]> create table clientes(
    -> id int auto_increment,
    -> documento bigint not null,
    -> nombres varchar(32) not null,
    -> telefono bigint null,
    -> direccion varchar(32) null,
    -> primary key(id));


#Insertar datos en la tabla
MariaDB [adsi1132816]> insert into clientes values(
    -> default,75000001, 'Jeremias Springfield',
    -> 8800011, 'Calle 100 con 23');
 