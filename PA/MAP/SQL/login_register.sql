USE nama_database;

ALTER TABLE login
ADD COLUMN id_register INT(11),
ADD FOREIGN KEY (id_register) REFERENCES register(id);
