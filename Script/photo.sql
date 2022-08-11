--
-- Base de datos: photo
--
-- --------------------------------------------------------
create database photo;


--
-- Estructura de tabla para la tabla usuario
--

CREATE TABLE usuario (
  username varchar(50) not null,
  correo varchar(100) not null,
  contrasenia varchar(100) not null,
  nombre_usuario varchar(100)default null,
  descripcion varchar(255) default null
);

--
-- Indices de la tabla usuario
--
ALTER TABLE usuario
  ADD PRIMARY KEY (username);


--
-- Estructura de tabla para la tabla imagen
--

CREATE TABLE imagen (
  id_imagen int(11) not null ,
  username varchar(50) not null,
  imagen longblob not null,
  descripcion_img varchar(255) default null,
  titulo_img varchar(100) default null,
  etiqueta varchar(100) default null,
  fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

--
-- Indices de la tabla imagen
--
ALTER TABLE imagen
  ADD PRIMARY KEY (id_imagen);

--
-- AUTO_INCREMENT de la tabla imagen
--
ALTER TABLE imagen
  MODIFY id_imagen int(11) NOT NULL AUTO_INCREMENT;

--
-- Indices foraneas de la tabla imagen
--

ALTER TABLE imagen
ADD CONSTRAINT fk_imagen_usuario FOREIGN KEY (username) REFERENCES usuario (username);  