<?php 
    class Categorias extends CI_Model{

        public function view(){
            $this->db->select('*');
            $this->db->from('categorias');
            return $this->db->get()->result();
        }

        public function save($cat){
            $this->db->insert('categorias',$cat);
        }
    }



?>
