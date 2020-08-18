<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aprobar_aspirante extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->helper('form');
		//Cargar modelo de la BD
		$this->load->model(array('M_aspirante', 'M_alumno', 'M_calificaciones'));
	}

	public function index(){
		$data = array();
		$data["aspirantes"] = $this->M_aspirante->getAspirantes();
		$this->load->view('aprobar_aspirante', $data);
	}

	public function inscribir(){
		$id = $this->input->post('id');
		$this->setNewStudent(); //Añade el aspirante a la lista de alumnos
		//Crea el nuevo refistro en la tabla calificaciones con el id del aspirante incrito
		$this->M_calificaciones->crearRegistro($id);
		$data = array();
		$data['Status'] = 1;
		$this->M_aspirante->inscribirAspirante($id, $data);// Cambia el STATUS a 1 para saber que esta incrito
		redirect('aprobar_aspirante/');
	}

	public function setNewStudent(){
		$data = array();

		// $data['estatus'] = 
		// $data['promanterior'] = 
		// $data['numficha'] = 
		// $data['trabaja'] = 
		// $data['ocupacion'] = 
		// $data['nombre_padre'] = 
		// $data['ocupacion_padre'] = 
		// $data['nombre_madre'] = 
		// $data['ocupacion_madre'] = 
		// $data['propedeutico'] = 
		// $data['ano_bachiderato'] = 
		// $data['promedio_bachi'] = 
		// $data['carrera_ut'] = 
		// $data['ut_procedencia'] = 
		// $data['num_imss'] = 
		// $data['areincripcion'] = 
		// $data['folio_pronabes'] = 
		// $data['IdEscuela_proc'] = 
		$data['IdPlan_Estudios'] = 101;
		$data['Id_Personas'] = 1;

		//CON LA SIGUIENTE LINIA SE AGREGARIA EL ASPIRANTE A LA TABLA ALUMNO PARA INSCRIBIRLO
		$this->M_alumno->insertAlumno($data);
	}


}
