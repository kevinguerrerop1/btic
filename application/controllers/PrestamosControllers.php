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
		$datos['Servicios']=$this->Servicios->view();
		$datos['Inventario']=$this->Inventario->view();
        $this->load->view("Prestamos/create",$datos);
    }

	public function store(){
		$pres['idart']=$this->input->post('idart');
		$pres['ps']=$this->input->post('ps');
		$pres['pe']=$this->input->post('pe');
		$pres['idser']=$this->input->post('idser');
		$pres['ubicacion']=$this->input->post('ubicacion');
		$pres['fchentrega']=$this->input->post('fchentrega');

		$this->Prestamos->save($pres);
		redirect('PrestamosControllers/index');

	}
    
    
    
    
}

?>
