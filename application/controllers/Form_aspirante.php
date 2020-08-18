<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_aspirante extends CI_Controller {
	private $model = 'M_aspirante';

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
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
		// debug('');
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
		$fotosDB = array(
			'actanacimiento',
			'curp',
			'comprobante_domicilio',
			'comprobante_estudio',
			'ficha_admision',
			'formato_inscripcion',
			'fotografia_aspirante'
		); 
		$data['Status'] = 0;
		$data['Id_Carrera'] = $this->input->post('carrera');

		if(count($_FILES['img']['name']) >=  7){
			$size = count($_FILES['img']['name']);
			for ($i=0; $i < $size; $i++) {
				if (!empty($_FILES['img']['name'][$i])) {
					$_FILES['imagen']['name'] = $_FILES['img']['name'][$i];
					$_FILES['imagen']['type'] = $_FILES['img']['type'][$i];
					$_FILES['imagen']['tmp_name'] = $_FILES['img']['tmp_name'][$i];
					$_FILES['imagen']['error'] = $_FILES['img']['error'][$i];
					$_FILES['imagen']['size'] = $_FILES['img']['size'][$i];

					$config['upload_path'] = './cargas';
					$config['allowed_types'] = 'jpg|jpeg|png';

					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if($this->upload->do_upload('imagen')){
						//debug("SUCCES", false);
						$fileData = $this->upload->data();
						$uploadData[$i]['file_name'] = $fileData['file_name'];
						$data[$fotosDB[$i]] = $fileData['file_name'];
					}
				}
			}//End for
		}//End if
		else{
			debug("Debe subir todas las imagenes solicitadas", false);
		}//End else
		
		$id = $this->{$this->model}->insert_aspirante($data);
		if($id != NULL) {
			redirect('form_aspirante/');
		}//end of if
		else {
			debug("Error al insertar", false);
		}//end of else	
	}//FIN DE FUNCION agregar_aspirante()
}
