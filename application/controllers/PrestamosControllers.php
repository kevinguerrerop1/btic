<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrestamosControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('Prestamos');
		$this->load->model('Inventario');
		$this->load->model('Servicios');
		$this->load->model('users');
    }
    
    public function index(){
        $datos['prestamos']=$this->Prestamos->view();
		$this->load->view('Prestamos/index',$datos);
    }

    public function create(){
		//$this->load->view("Prestamos/aaa",$data);
		//$datos['Servicios']=$this->Servicios->view();
		$id_usuario = $this->session->userdata('id');
        $datos["usuario"] = $this->users->get_datos($id_usuario);
		$datos['Inventario']=$this->Inventario->view();
		//$datos['Users']=$this->users->view();
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
