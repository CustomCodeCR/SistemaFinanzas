CREATE DATABASE dashboard_usuarios;
USE dashboard_usuarios;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    pais VARCHAR(50) NOT NULL,
    rol ENUM('Administrador', 'Usuario') DEFAULT 'Usuario'
);

INSERT INTO usuarios (nombre, correo, pais, rol) VALUES
('Juan Pérez', 'juan@example.com', 'México', 'Administrador'),
('María López', 'maria@example.com', 'España', 'Usuario');


para las pruebas use esto


OJO importante despues lo modifique con este para incluir al asociado
ALTER TABLE usuarios 
ADD COLUMN asociado_id INT NULL,
ADD CONSTRAINT fk_asociado FOREIGN KEY (asociado_id) REFERENCES usuarios(id) ON DELETE SET NULL;

ALTER TABLE usuarios MODIFY COLUMN rol ENUM('Administrador', 'Usuario', 'Asociado') DEFAULT 'Usuario';
