<?php 
    class Prestamos extends CI_Model{

        public function view(){
            $this->db->select('*');
            $this->db->from('prestamos');
            return $this->db->get()->result();
        }
    }



?>