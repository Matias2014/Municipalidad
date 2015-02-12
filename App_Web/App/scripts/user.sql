DROP TABLE IF EXISTS user;

CREATE TABLE user(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
usuario VARCHAR(100) NOT NULL,
correo VARCHAR(100) NOT NULL,
pass VARCHAR(100) NOT NULL
);

INSERT INTO user (usuario, correo, pass) VALUES ('mirazabal1', 'matiasirazabal@yahoo.com', 'mira534');
INSERT INTO user (usuario, correo, pass) VALUES ('Quique', 'jemaya@gmail.com', '1234');
NSERT INTO user (usuario, correo, pass) VALUES ('Esteban', 'xxx@gmail.com', '0956');