CREATE DATABASE login_db;

USE login_db;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  PASSWORD VARCHAR(50) NOT NULL,
  NAME VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO users (username, PASSWORD, NAME, email) 
VALUES ('john', 'pass123', 'John Doe', 'johndoe@example.com');

INSERT INTO users (username, PASSWORD, NAME, email) 
VALUES ('jane', 'pass456', 'Jane Doe', 'janedoe@example.com');

CREATE DATABASE login_register_db;

USE login_register_db;

CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL UNIQUE,
  PASSWORD VARCHAR(255) NOT NULL
);

CREATE TABLE registrations (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  PASSWORD VARCHAR(255) NOT NULL
);
