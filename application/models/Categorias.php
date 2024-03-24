<?php 
    class Categorias extends CI_Model{

        public function view(){
			$this->db->select("ID_CAT, NOMCAT");
			$this->db->from("BTIC_CATEGORIAS");
			$query = $this->db->get();
			if($query->num_rows() >= 1){    
			  return $query->result();
			}else{
			  return false;
			}    
		  }

        public function save($cat){
            $this->db->insert('categorias',$cat);
        }
    }



?>
