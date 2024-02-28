<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('Categorias');
    }
    
    public function index(){
        $datos['categorias']=$this->Categorias->view();
		$this->load->view('Categorias/index',$datos);
    }

    public function create(){
        $this->load->view("Categorias/create");
    }
    
    public function store(){
        $cat['nomcat']=$this->input->post('nomcat');
		$this->Categorias->save($cat);
		
		//Funcion para redireccionar
		redirect('CategoriasControllers/index');
    }    
}
?>
