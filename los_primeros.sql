CREATE DATABASE los_primeros;
USE los_primeros;

CREATE TABLE integrantes (
  id int(11) NOT NULL AUTO_INCREMENT,
  create_time datetime DEFAULT NULL,
  name varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO integrantes (id, name) VALUES (1, 'Libni Merari Cruz Martinez');