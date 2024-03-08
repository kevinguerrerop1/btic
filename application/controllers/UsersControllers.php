<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersControllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('Users');
    }
    
    public function index(){
        $datos['users']=$this->Users->view();
		$this->load->view('Users/index',$datos);
    }
}
?>
