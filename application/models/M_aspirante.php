<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class M_aspirante extends CI_Model{
    private $tabla = "aspirante";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function listar_personas(){
        //selelct*from personas
        return $this->db->get($this->tabla)->result();
    }

    public function insert_aspirante($data){
        $this->db->insert($this->tabla, $data);
        return $this->db->insert_id();
    }//end insert
}