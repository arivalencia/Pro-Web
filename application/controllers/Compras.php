<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compras extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->helper('form');
	}

	/**
	 * METODO PRINCIPAL
	 */
	public function index(){
		$this->load->view('compras_view');
    }

    public function nuevoProveedor(){
        $this->load->view('nuevo_proveedor_view');
    }
	
}
