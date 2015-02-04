DROP TABLE IF EXISTS guardia;

CREATE TABLE guardia(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
mgeneral VARCHAR(100) NOT NULL,
consultoriomg VARCHAR(100) NOT NULL,
mpediatria VARCHAR(100) NOT NULL,
consultoriomp VARCHAR(100) NOT NULL,
mterapia VARCHAR(100) NOT NULL,
consultoriomt VARCHAR(100) NOT NULL,
fecha DATE NOT NULL
);

INSERT INTO guardia (mgeneral, consultoriomg, mpediatria, consultoriomp, mterapia, consultoriomt, fecha) VALUES ('Dr. Juan Gomez', 'Consultorio 1', 'Dr. Juan Perez', 'Consultorio 2', 'Dr. Pepe Rodriguez', 'Sala de cuidados intensivos', '2014-01-29');
INSERT INTO guardia (mgeneral, consultoriomg, mpediatria, consultoriomp, mterapia, consultoriomt, fecha) VALUES ('Dr. Pedro Rodriguez', 'Consultorio 2', 'Dr. Juan Gomez', 'Consultorio 1', 'Dr. Marcelo Juarez', 'Sala de cuidados intensivos', '2014-01-30');