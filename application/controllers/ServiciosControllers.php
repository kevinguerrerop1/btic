<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiciosControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('Servicios');
    }
    
    public function index(){
        $datos['servicios']=$this->Servicios->view();
		$this->load->view('Servicios/index',$datos);
    }

    public function create(){
        $this->load->view("Servicios/create");
    }
    
    public function store(){
        $serv['nomserv']=$this->input->post('nomserv');
		$this->Servicios->save($serv);
		
		//Funcion para redireccionar
		redirect('ServiciosControllers/index');
    }

    
    
    
}






?>
