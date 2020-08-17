<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Mwelcome extends CI_Model{
    private $tabla = "persona";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function listar_personas(){
        //selelct*from personas
        return $this->db->get($this->tabla)->result();
    }
}