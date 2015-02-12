DROP TABLE IF EXISTS profesionales;

CREATE TABLE profesionales(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
categoria VARCHAR(100) NOT NULL,
ruta VARCHAR(300) NOT NULL
);

INSERT INTO profesionales (categoria, ruta) VALUES ('clinica', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_ClinicaMedica.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('pediatria', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Pediatria.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('cirugia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Cirugia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('neumonologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Neumonologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('otorrino', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Otorrino.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('neurologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Neurologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('oftalmologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Oftalmo.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('odontologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Odonto.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('gastro', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Gastro.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('traumatologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Traumato.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('cardio', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Cardio.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('hematologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Hematologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('oncologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Oncologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('urologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Urologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('ginecologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Gineco.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('cirugiainf', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_CirugInf.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('reumatologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Reumato.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('fisiatria', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Fisiatria.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('anestesiologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Anestesiologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('diabetologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Diabeto.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('psiquiatria', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Psiquiatria.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('nutricion', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Nutricion.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('obstetricia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Obstetricia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('anatomia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_AnatomiaPato.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('fonoudilogia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Fonoaudio.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('terapiaoc', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Terapia-Ocup.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('psicologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Psicologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('psicopedagogia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Psicopedagogia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('kinesiologia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/Hospital/HOS_Profesionales/Info_H_Kinesiologia.jpg');

/* Faltan */

INSERT INTO profesionales (categoria, ruta) VALUES ('asistentes', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('terapia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('diagnostico', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('tomografia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('farmacia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('hemoterapia', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('densitometria', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('bioquimicos', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('laboratorio', 'https://raw.githubusercontent.com/Matias2014/Municipalidad/master/App_Web/App/Recorte/construccion1.jpg');