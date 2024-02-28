<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrestamosControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('Prestamos');
		$this->load->model('Inventario');
		$this->load->model('Servicios');
    }
    
    public function index(){
        //$datos['categorias']=$this->Categorias->view();
		$this->load->view('Prestamos/index');
    }

    public function create(){
		$datos['Inventario']=$this->Inventario->view();
        $this->load->view("Prestamos/create",$datos);
    }
    
    
    
    
}

?>
