CREATE DATABASE nama_database;

USE nama_database;

CREATE TABLE register (
   id INT(11) NOT NULL AUTO_INCREMENT,
   username VARCHAR(50) NOT NULL,
   password VARCHAR(255) NOT NULL,
   PRIMARY KEY (id)
);
