<?php 
    class Servicios extends CI_Model{

        public function view(){
            $this->db->select('*');
            $this->db->from('servicios');
            return $this->db->get()->result();
        }

        public function save($serv){
            $this->db->insert('servicios',$serv);
        }
    }



?>
