<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	#####################################################################
	public function __construct(){

		parent::__construct();

		$this->load->model('DemandeurDAO');
		
		//verifying session
		if(!$this->session->entreprise){
			$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Veuillez vous connecter</p>');
			redirect('welcome/V_login');
		}
		
	}

	#####################################################################
	public function index()
	{
		$this->C_sign_up_redirect();
	}
	#####################################################################
	#							LOAD VIEWS								#
	

	#####################################################################

	#####################################################################
	public function V_home_user(){

		$this->load->view('home_user');
	}
	#####################################################################
	public function C_sign_up_redirect(){

		$data['title']= "Sign up";
		$this->load->view('_inc/header',$data);
		$this->load->view('sign_up');
		$this->load->view('_inc/footer');
	}
	
	

	#####################################################################

	#####################################################################

	#####################################################################
	public function upload_profile(){

	}

	#####################################################################

}
?>
