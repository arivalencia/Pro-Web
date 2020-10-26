<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->helper('form');
	}

	/**
	 * METODO PRINCIPAL
	 */
	public function index(){
		$this->load->view('ventas_view');
    }
	
}
