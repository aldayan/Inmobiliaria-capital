use inmobiliaria_db;
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(100) NOT NULL,
    contraseña VARCHAR(100) NOT NULL,
    id_cargo INT NOT NULL
);

INSERT INTO login (correo, contraseña, id_cargo)
VALUES
('admin@example.com', 'admin123', 3),
('usuario@example.com', 'user123', 2);

CREATE TABLE formulario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    cedula VARCHAR(11),
    telefono VARCHAR(10),
    direccion TEXT,
    ubicacion VARCHAR(100)
);

	

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(100),
    nombre VARCHAR(255),
    ubicacion VARCHAR(255),
    costo VARCHAR(255),
    hablar TEXT,
    descripcion TEXT,
    caracteristicas TEXT,
    habitaciones INT,
    banos INT,
    parqueos INT,
    metros INT,	
    imagen1 TEXT,
    imagen2 TEXT,
    imagen3 TEXT,
    imagen4 TEXT,
    imagen5 TEXT,
    imagen6 TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);	
select * from  productos;
delete from productos where id = 7 or id = 14 or id = 16;

drop table productos;

