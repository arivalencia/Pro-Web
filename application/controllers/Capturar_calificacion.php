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

	/**
	 * DEVUELVE LA VISTA PARA CAPTURAR CALIFICACIONES
	 * AL HACER CLIC EN "INSCRIBIR"
	 */
	public function capturar(){
		$data = array();
		$id = $this->input->post('id');
		$data['alumno'] = $this->M_aspirante->getAlumnoById($id);
		$data['calificaciones'] = $this->M_calificaciones->getById($id);
		$this->load->view('capturar', $data);
		// debug($data, false);
	}

	/*
	ACTUALIZA EL REGISTRO DE CALIFICACIONES 
	DEL ALUMNO QUE SE ESTE EDITANDO */
	public function actualizar_calificacion(){
		$id = $this->input->post('id');
		$data = array();
		$data['parcial1'] = $this->input->post('parcial1');
		$data['parcial2'] = $this->input->post('parcial2');
		$data['parcial3'] = $this->input->post('parcial3');
		$data['parcial4'] = $this->input->post('parcial4');
		$this->M_calificaciones->actualizarCalificacion($id, $data);
		redirect('capturar_calificacion/index/');
	}
}
