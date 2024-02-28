<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('index');
    }

	public function indexrut(){
		$this->load->view('welcome_message');
	}

	public function vistausuario(){
		$this->load->view('ingreso');
	}

	public function viewinventario(){
		$this->load->view('inventario');
	}

}
?>
