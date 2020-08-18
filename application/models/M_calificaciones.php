<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class M_calificaciones extends CI_Model{
    private $tabla = "calificaciones";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function getData(){
        return $this->db->get($this->tabla)->result();
    }

    /*public function insert_aspirante($data){
        $this->db->insert($this->tabla, $data);
        return $this->db->insert_id();
    }//end insert*/

    public function crearRegistro($id){
        $data = array();
        $data['id_aspirante'] = $id;
        return $this->db->insert($this->tabla, $data);
    }//end deleteAspirante
}