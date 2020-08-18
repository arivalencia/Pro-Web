<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class M_alumno extends CI_Model{
    private $tabla = "alumno";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function insertAlumno($data){
        $this->db->insert($this->tabla, $data);
        return $this->db->insert_id();
    }//end insert
}