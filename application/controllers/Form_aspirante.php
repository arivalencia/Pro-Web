<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_aspirante extends CI_Controller {
	private $model = 'M_aspirante';

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		//Cargar modelo de la BD
		$this->load->model($this->model);
	}

	public function index(){
		$data = array();
		$data['carreras'] = array(
			'0' => "Ingenieria Mecatronica",
			'1' => "Ingeniería Financiera",
			'2' => "Ingeniería Química",
			'3' => "Ingeniería Industrial",
			'4' => "Ingeniería Biotecnología",
			'5' => "Ingeniería en Tecnologías de la información",
			'6' => "Ingeniería en Sistemas Automotrices"
		);
		$this->load->view('form_aspirante', $data);
	}

	public function agregar_aspirante(){
		$data=array();

		$data['Nombre'] = $this->input->post('nombre');
		$data['Apaterno'] = $this->input->post('a_paterno');
		$data['Amaterno'] = $this->input->post('a_materno');
		$data['adeudo'] = $this->input->post('adeudo');
		$data['numadeudo'] = $this->input->post('num_adeudo');
		$data['padecimiento'] = $this->input->post('enfermedad');
		$data['tipopadecimiento'] =  $this->input->post('tipo_enfermedad');
		$data['alergias'] = $this->input->post('alergias');
		$data['tipoalergias'] = $this->input->post('tipo_alergia');
		$data['ansiedad'] = $this->input->post('ansiedad');
		$data['estres'] = $this->input->post('estres');
		$data['depresion'] = $this->input->post('depresion');
		$data['rechazo'] = $this->input->post('rechazo');
		$data['adaptacion'] = $this->input->post('adaptarse_a_cambios');
		$data['extra'] = $this->input->post('extra');
		$data['actanacimiento'] = "";
		$data['curp'] = "";
		$data['comprobante_domicilio'] = "";
		$data['comprobante_estudio'] = "";
		$data['ficha_admision'] ="";
		$data['formato_inscripcion'] = "";
		$data['fotografia_aspirante'] = "";
		//$data['correo'] = "";
		$data['Status'] = 0;
		$data['Id_Carrera'] = $this->input->post('carrera');

		debug($_FILES['img[]']["name"]);

		if ($_FILES['img[]']['name'] != NULL) {
			$config['upload_path'] = './cargas';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('img[]')) {
				$error = array('error' => $this->upload->display_errors());
				debug($error);
				//$this->index();
			}else {
				$file_info = $this->upload->data();
				debug($file_info, false);
				
				$data1 = array('upload_data' => $this->upload->data());
				$data['actanacimiento'] = $file_info['file_name'];
			}
		}

		$id = $this->{$this->model}->insert_aspirante($data);
		if($id != NULL) {
			redirect('welcome/');
		}//end of if
		else {
			debug("Error al insertar");
		}//end of else	
	}//FIN DE FUNCION agregar_aspirante()
}
