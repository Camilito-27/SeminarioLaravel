CREATE DATABASE IF NOT EXISTS seminario_db;
USE seminario_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    contenido TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

ALTER TABLE posts
ADD COLUMN categoria_id INT,
ADD FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE SET NULL;

INSERT INTO users (nombre, email) VALUES
('Carlos Pérez', 'carlos@mail.com'),
('Maria Gómez', 'maria@mail.com');

INSERT INTO categorias (nombre) VALUES
('Tecnología'),
('Deportes');

INSERT INTO posts (titulo, contenido, user_id, categoria_id) VALUES
('Mi primer post', 'Contenido del post 1', 1, 1), -- Tecnología
('Segundo post', 'Contenido del post 2', 1, 2),   -- Deportes
('Post de Maria', 'Hola mundo', 2, 1);            -- Tecnología
