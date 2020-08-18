<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class M_aspirante extends CI_Model{
    private $tabla = "aspirante";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function getAspirantes(){
        $this->db->where('Status', 0);
        return $this->db->get($this->tabla)->result();
    }

    public function getAlumnos(){
        $this->db->where('Status', 1);
        return $this->db->get($this->tabla)->result();
    }

    public function getAlumnoById($id){
        $this->db->where('Id_Aspirante', $id);
        return $this->db->get($this->tabla)->result()[0];
    }

    public function insert_aspirante($data){
        $this->db->insert($this->tabla, $data);
        return $this->db->insert_id();
    }//end insert

    public function inscribirAspirante($id, $data){
        $this->db->where('id_aspirante  ', $id);
        return $this->db->update($this->tabla, $data);
    }//end deleteAspirante
}