<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capturar_calificacion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->helper('form');
		//Cargar modelo de la BD
		$this->load->model(array('M_aspirante', 'M_alumno', 'M_calificaciones'));
	}

	public function index(){
		$data = array();
		$data["alumnos"] = $this->M_aspirante->getAlumnos();
		$data["calificaciones"] = $this->M_calificaciones->getData();
		$this->load->view('capturar_calificacion', $data);
	}
}
