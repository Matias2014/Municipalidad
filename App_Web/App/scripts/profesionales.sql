DROP TABLE IF EXISTS profesionales;

CREATE TABLE profesionales(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
categoria VARCHAR(100) NOT NULL,
ruta VARCHAR(100) NOT NULL
);

INSERT INTO profesionales (categoria, ruta) VALUES ('clinica', 'Recorte/Hospital/HOS_Profesionales/Info_H_ClinicaMedica.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('pediatria', 'Recorte/Hospital/HOS_Profesionales/Info_H_Pediatria.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('cirugia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Cirugia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('neumonologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Neumonologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('otorrino', 'Recorte/Hospital/HOS_Profesionales/Info_H_Otorrino.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('neurologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Neurologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('oftalmologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Oftalmo.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('odontologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Odonto.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('gastro', 'Recorte/Hospital/HOS_Profesionales/Info_H_Gastro.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('traumatologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Traumato.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('cardio', 'Recorte/Hospital/HOS_Profesionales/Info_H_Cardio.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('hematologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Hematologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('oncologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Oncologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('urologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Urologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('ginecologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Gineco.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('cirugiainf', 'Recorte/Hospital/HOS_Profesionales/Info_H_CirugInf.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('reumatologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Reumato.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('fisiatria', 'Recorte/Hospital/HOS_Profesionales/Info_H_Fisiatria.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('anestesiologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Anestesiologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('diabetologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Diabeto.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('psiquiatria', 'Recorte/Hospital/HOS_Profesionales/Info_H_Psiquiatria.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('nutricion', 'Recorte/Hospital/HOS_Profesionales/Info_H_Nutricion.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('obstetricia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Obstetricia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('anatomia', 'Recorte/Hospital/HOS_Profesionales/Info_H_AnatomiaPato.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('fonoudilogia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Fonoaudio.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('terapiaoc', 'Recorte/Hospital/HOS_Profesionales/Info_H_Terapia-Ocup.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('psicologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Psicologia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('psicopedagogia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Psicopedagogia.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('kinesiologia', 'Recorte/Hospital/HOS_Profesionales/Info_H_Kinesiologia.jpg');

/* Faltan */

INSERT INTO profesionales (categoria, ruta) VALUES ('asistentes', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('terapia', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('diagnostico', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('tomografia', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('farmacia', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('hemoterapia', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('densitometria', 'Recorte/Hospital/HOS_Profesionales/.jpg');
INSERT INTO profesionales (categoria, ruta) VALUES ('bioquimicos', 'Recorte/Hospital/HOS_Profesionales/.jpg');