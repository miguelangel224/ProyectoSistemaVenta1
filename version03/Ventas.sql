CREATE DATABASE venta

USE venta

CREATE TABLE categoria (
  CategoriaID INT(11) NOT NULL AUTO_INCREMENT,
  DescripcionCat VARCHAR(30) NOT NULL,
  PRIMARY KEY (CategoriaID)
) 

CREATE TABLE producto (
  ProductoID INT(11) NOT NULL AUTO_INCREMENT,
  DescripcionPro VARCHAR(50) NOT NULL,
  Precio VARCHAR(10) NOT NULL,
  Stock INT(11) DEFAULT NULL,
  CategoriaID INT(11) NOT NULL,
  PRIMARY KEY (ProductoID),
  KEY Producto_fk (CategoriaID),
  CONSTRAINT Producto_fk FOREIGN KEY (CategoriaID) REFERENCES categoria (CategoriaID)
) 

CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(45) NOT NULL,
  PASSWORD VARCHAR(45) NOT NULL,
  email VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
) 


SELECT ProductoID , DescripcionCat, DescripcionPro, Precio, Stock FROM producto
INNER JOIN categoria  ON producto.CategoriaID = categoria.CategoriaID 

WHERE ProductoID='2'


DELETE FROM producto WHERE CategoriaID="6"



INSERT INTO categoria (DescripcionCat) VALUES
('BEBIDAS'),
('JUGOS'),
('LIMPIEZA'),
('TRAGOS'),
('ABARROTES'),
('ELECTRODOMESTICOS');

SELECT * FROM categoria

INSERT INTO producto VALUES (1,'COCA COLA',2,100,1);
INSERT INTO producto VALUES (2,'JUGO DE FRESA',5,100,2);
INSERT INTO producto VALUES (3,'MISTER MUSCULO',4,100,3);
INSERT INTO producto VALUES (4,'CHAMPAN',15,100,4);
INSERT INTO producto VALUES (5,'FIDEOS',10,100,5);
INSERT INTO producto VALUES (6,'COCINA',550,100,6);

SELECT * FROM producto

INSERT INTO usuarios VALUES (1,'kevin','123','kevin@hotmail.com')

SELECT * FROM usuarios
