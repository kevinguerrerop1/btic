<?php 
    class Prestamos extends CI_Model{

        public function view(){
            //$this->db->from('prestamos');
			$this->db->select('servicios.id,marca,modelo,nroserie,ps,pe,nomserv,ubicacion,fchentrega');    
            $this->db->from('prestamos');
            $this->db->join('articulos', 'prestamos.idart = articulos.id');
			$this->db->join('servicios', 'prestamos.idser = servicios.id');
           return $this->db->get()->result();
        }

		public function save($pres){
			$this->db->insert('prestamos',$pres);
		}
    }



?>
