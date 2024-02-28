<?php 
    class Inventario extends CI_Model{

        public function view(){
            $this->db->select('*');    
            $this->db->from('articulos');
            $this->db->join('categorias', 'articulos.idcat = categorias.id');
            return $this->db->get()->result();
        }
        public function viewxcategorias($id){
            $this->db->select('*');
            $this->db->from('articulos');
            $this->db->where('idcat', $id);

            //Para obtener Datos
            $query = $this->db->get(); 
            if($query->num_rows() >= 1){    
              return $query->result();
            }
            else{
              return false;
            }
        }
		public function save($art){
            $this->db->insert('articulos',$art);
        }
    }



?>
