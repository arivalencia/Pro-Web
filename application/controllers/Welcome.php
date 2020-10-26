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
	}

	public function index(){
		$this->load->view('welcome');
	}

}
