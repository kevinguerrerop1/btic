<?php 
    class Users extends CI_Model{

        public function view(){
            $this->db->select('*');
            $this->db->from('Users');
            return $this->db->get()->result();
        }

       
    }



?>
