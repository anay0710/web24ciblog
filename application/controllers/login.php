<?php

class Login extends CI_Controller{

	function  __construct(){
		parent::__construct();
	}

	function index(){
		if($this->session->userdata('logged_in')){
			redirect('user','refresh');
		}
		else{

			$this->load->view('login/login_view');
		}
	}
}