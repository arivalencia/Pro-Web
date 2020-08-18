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

    public function getById($id){
        $this->db->where('id_aspirante', $id);
        return $this->db->get($this->tabla)->result()[0];
    }

    public function actualizarCalificacion($id, $data){
        $this->db->where('id_aspirante  ', $id);
        return $this->db->update($this->tabla, $data);
    }

    public function crearRegistro($id){
        $data = array();
        $data['id_calificaiones'] = $id;
        return $this->db->insert($this->tabla, $data);
    }//end deleteAspirante
}