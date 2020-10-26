<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenesServicios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->helper('form');
	}

	/**
	 * METODO PRINCIPAL
	 */
	public function index(){
		$this->load->view('ordenes_servicios_view');
    }

    public function nuevaOrden(){
        $this->load->view('nueva_orden_servicio_view');
    }
	
}
