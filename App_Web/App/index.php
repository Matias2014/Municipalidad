<?php
	
	if(!array_key_exists('action', $_REQUEST)){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->index();
	}else if($_REQUEST['action'] == 'inicioMuni.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->inicioMuni();
	}else if($_REQUEST['action'] == 'agendaCultural.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->agendaCultural();
	}else if($_REQUEST['action'] == 'TPUhorarios.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->TPUhorarios();
	}else if($_REQUEST['action'] == 'recorridos.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->recorridos();
	}else if($_REQUEST['action'] == 'guiadeServicios.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->guiadeServicios();
	}else if($_REQUEST['action'] == 'alojamiento.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->alojamiento();
	}else if($_REQUEST['action'] == 'camping.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->camping();
	}else if($_REQUEST['action'] == 'restaurant.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->restaurant();
	}else if($_REQUEST['action'] == 'estservicio.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->estservicio();
	}else if($_REQUEST['action'] == 'remiseria.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->remis();
	}else if($_REQUEST['action'] == 'locutorio.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->locutorios();
	}else if($_REQUEST['action'] == 'confiterias.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->confiterias();
	}else if($_REQUEST['action'] == 'servalautomotor.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->servalautomotor();
	}else if($_REQUEST['action'] == 'rural.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->rural();
	}else if($_REQUEST['action'] == 'almacenes.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->almacenes();
	}else if($_REQUEST['action'] == 'regionales.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->regionales();
	}else if($_REQUEST['action'] == 'recreacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->recreacion();
	}else if($_REQUEST['action'] == 'hogar.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->hogar();
	}else if($_REQUEST['action'] == 'prensa.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->prensa();
	}else if($_REQUEST['action'] == 'farmacias.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->farmacias();
	}else if($_REQUEST['action'] == 'intcultural.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->intcultural();
	}else if($_REQUEST['action'] == 'bancos.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->bancos();
	}else if($_REQUEST['action'] == 'datos.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->datos();
	}else if($_REQUEST['action'] == 'iniciopersonal.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->iniciopersonal();
	}else if($_REQUEST['action'] == 'PersonalContacto.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->PersonalContacto();
	}else if($_REQUEST['action'] == 'ley.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley();
	}else if($_REQUEST['action'] == 'ley.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley();
	}else if($_REQUEST['action'] == 'ley1.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley1();
	}else if($_REQUEST['action'] == 'ley2.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley2();
	}else if($_REQUEST['action'] == 'ley3.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley3();
	}else if($_REQUEST['action'] == 'ley4.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley4();
	}else if($_REQUEST['action'] == 'ley5.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley5();
	}else if($_REQUEST['action'] == 'ley6.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley6();
	}else if($_REQUEST['action'] == 'ley7.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley7();
	}else if($_REQUEST['action'] == 'ley8.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley8();
	}else if($_REQUEST['action'] == 'ley9.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley9();
	}else if($_REQUEST['action'] == 'ley10.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley10();
	}else if($_REQUEST['action'] == 'ley11.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley11();
	}else if($_REQUEST['action'] == 'ley12.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley12();
	}else if($_REQUEST['action'] == 'ley13.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley13();
	}else if($_REQUEST['action'] == 'ley14.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley14();
	}else if($_REQUEST['action'] == 'ley15.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley15();
	}else if($_REQUEST['action'] == 'ley16.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley16();
	}else if($_REQUEST['action'] == 'ley17.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley17();
	}else if($_REQUEST['action'] == 'ley18.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley18();
	}else if($_REQUEST['action'] == 'ley19.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley19();
	}else if($_REQUEST['action'] == 'ley20.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley20();
	}else if($_REQUEST['action'] == 'ley21.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley21();
	}else if($_REQUEST['action'] == 'ley22.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley22();
	}else if($_REQUEST['action'] == 'ley23.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley23();
	}else if($_REQUEST['action'] == 'ley24.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley24();
	}else if($_REQUEST['action'] == 'ley25.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley25();
	}else if($_REQUEST['action'] == 'ley26.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley26();
	}else if($_REQUEST['action'] == 'ley27.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley27();
	}else if($_REQUEST['action'] == 'ley28.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley28();
	}else if($_REQUEST['action'] == 'ley29.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley29();
	}else if($_REQUEST['action'] == 'ley30.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley30();
	}else if($_REQUEST['action'] == 'ley31.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley31();
	}else if($_REQUEST['action'] == 'ley32.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley32();
	}else if($_REQUEST['action'] == 'ley33.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley33();
	}else if($_REQUEST['action'] == 'ley34.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley34();
	}else if($_REQUEST['action'] == 'ley35.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley35();
	}else if($_REQUEST['action'] == 'ley36.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley36();
	}else if($_REQUEST['action'] == 'ley37.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley37();
	}else if($_REQUEST['action'] == 'ley38.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley38();
	}else if($_REQUEST['action'] == 'ley39.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley39();
	}else if($_REQUEST['action'] == 'ley40.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley40();
	}else if($_REQUEST['action'] == 'ley41.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley41();
	}else if($_REQUEST['action'] == 'ley42.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley42();
	}else if($_REQUEST['action'] == 'ley43.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley43();
	}else if($_REQUEST['action'] == 'ley44.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley44();
	}else if($_REQUEST['action'] == 'ley45.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley45();
	}else if($_REQUEST['action'] == 'ley46.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ley46();
	}else if($_REQUEST['action'] == 'organigrama.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->organigrama();
	}else if($_REQUEST['action'] == 'seleccion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->seleccion();
	}else if($_REQUEST['action'] == 'carpeta.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->carpeta();
	}else if($_REQUEST['action'] == 'inicioHospital.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->inicioHospital();
	}else if($_REQUEST['action'] == 'guiadeTramites.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->guiadeTramites();
	}else if($_REQUEST['action'] == 'licencias.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->licencias();
	}else if($_REQUEST['action'] == 'nueva.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->nueva();
	}else if($_REQUEST['action'] == 'renovacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->renovacion();
	}else if($_REQUEST['action'] == 'duplicado.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->duplicado();
	}else if($_REQUEST['action'] == 'profesional.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->profesional();
	}else if($_REQUEST['action'] == 'desarrollosocial.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->desarrollosocial();
	}else if($_REQUEST['action'] == 'baja.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->baja();
	}else if($_REQUEST['action'] == 'descuento.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->descuento();
	}else if($_REQUEST['action'] == 'jubilacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->jubilacion();
	}else if($_REQUEST['action'] == 'prog.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->prog();
	}else if($_REQUEST['action'] == 'solpoder.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->solpoder();
	}else if($_REQUEST['action'] == 'solrec.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->solrec();
	}else if($_REQUEST['action'] == 'pension.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->pension();
	}else if($_REQUEST['action'] == 'bajap.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->bajap();
	}else if($_REQUEST['action'] == 'descentralizacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->descentralizacion();
	}else if($_REQUEST['action'] == 'inmobiliariosrural.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->inmobiliariosrural();
	}else if($_REQUEST['action'] == 'ingresosbrutos.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->ingresosbrutos();
	}else if($_REQUEST['action'] == 'patente.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->patente();
	}else if($_REQUEST['action'] == 'omic.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->omic();
	}else if($_REQUEST['action'] == 'salud.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->salud();
	}else if($_REQUEST['action'] == 'certificado.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->certificado();
	}else if($_REQUEST['action'] == 'afiliacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->afiliacion();
	}else if($_REQUEST['action'] == 'medicacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->medicacion();
	}else if($_REQUEST['action'] == 'transporte.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->transporte();
	}else if($_REQUEST['action'] == 'espectaculo.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->espectaculo();
	}else if($_REQUEST['action'] == 'oficinadeempleo.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->oficinadeempleo();
	}else if($_REQUEST['action'] == 'postulantes.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->postulantes();
	}else if($_REQUEST['action'] == 'empleadoresp.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->empleadoresp();
	}else if($_REQUEST['action'] == 'empleadoresa.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->empleadoresa();
	}else if($_REQUEST['action'] == 'panda.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->panda();
	}else if($_REQUEST['action'] == 'carnet.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->carnet();
	}else if($_REQUEST['action'] == 'pileta.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->pileta();
	}else if($_REQUEST['action'] == 'rioparana.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->rioparana();
	}else if($_REQUEST['action'] == 'otros.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->otros();
	}else if($_REQUEST['action'] == 'opds.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->opds();
	}else if($_REQUEST['action'] == 'alquileres.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->alquileres();
	}else if($_REQUEST['action'] == 'calendarioturistico.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->calendarioturistico();
	}else if($_REQUEST['action'] == 'boletin.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->boletin();
	}else if($_REQUEST['action'] == 'guardia.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->guardia();
	}else if($_REQUEST['action'] == 'profesionales.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->profesionales();
	}else if($_REQUEST['action'] == 'profesionales1.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->profesionales1();
	}else if($_REQUEST['action'] == 'hvisitas.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->hvisitas();
	}else if($_REQUEST['action'] == 'practicas.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->practicas();
	}else if($_REQUEST['action'] == 'vacunacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->vacunacion();
	}else if($_REQUEST['action'] == 'caps.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->caps();
	}else if($_REQUEST['action'] == 'especialidad.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->especialidad();
	}else if($_REQUEST['action'] == 'salas.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->salas();
	}else if($_REQUEST['action'] == 'tasas.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->tasas();
	}else if($_REQUEST['action'] == 'hospitalOncologico.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->hospitaloncologico();
	}else if($_REQUEST['action'] == 'docinternacion.php'){
		include_once './controller/controller.php';
		$controler = new Controlador();
		$controler->docinternacion();
	}
?>