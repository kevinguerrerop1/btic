<?php 
    class Prestamos extends CI_Model{

        public function view(){
            $this->db->select('*');
            $this->db->from('prestamos');
            return $this->db->get()->result();
        }

		public function save($pres){

			$this->db->insert('prestamos',$pres);
		}
    }



?>
