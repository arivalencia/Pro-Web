<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Modulo de aspirantes
 * 
 * Modulo de aspirantes de control escolar
 * @autor fabrica de software /UPT
 */

class Welcome extends CI_Controller {

	private $model = 'mwelcome';

	public function __construct(){
		parent::__construct();
		//Cargar modelo de la BD
		$this->load->model($this->model);
	}

	public function index(){
		$this->load->view('welcome');
	}

	/**
	 * Muestra la vista de personas en control escolar
	 * @return void
	 */
	public function listar(){
		$data['personas'] = $this->{$this->model}->listar_personas();
		$this->load->view('lista_personas', $data);
	}
}
