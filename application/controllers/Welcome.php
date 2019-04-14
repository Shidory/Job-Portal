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
	public function login_controller(){
		
		$this->_rules_login();
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Remplissez les champs obligatoires</p>');
            redirect('welcome/C_login_redirect');
		}
		else {
			
            $pwd = $this->input->post('pwd');
            $email = $this->input->post('email',TRUE);
			$typePers = $this->input->post('typePers',TRUE);
			$typeEnt = $this->input->post('typeEnt',TRUE);
			
			if($typePers != NULL && $typeEnt != NULL){
				$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Veuillez Choisir un seul type</p>');
                redirect('welcome/C_login_redirect');
			}

			if ($typePers != NULL) {

				$user = $this->DemandeurDAO->get_by_email($email);
				if(!empty($user)){

					if(sha1($pwd) == $user->pwd){

						$data = array(
							'user' => $user,
							'type' => 'user'
						);
						$this->session->set_userdata($data);
						$this->session->set_flashdata('message', '<p style="color:green;"><i class="material-icons">check</i>Bienvenue '.ucfirst($user->prenomDemandeur).'</p>');
						redirect('welcome/home_user');
					}
					$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Email or Password Incorrect</p>');
                	redirect('welcome/C_login_redirect');
				}else{
					$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Email or Password Incorrect</p>');
                	redirect('welcome/C_login_redirect');
				}
				
			}else if($typeEnt != NULL) {
				$entreprise = $this->employeur_model->get_by_email($email);
				if(!empty($entreprise)){
					if(sha1($pwd) == $entreprise->pwd){
						
						$data = array(
							'entreprise' => $entreprise,
							'type' => 'entreprise'
						);
						$this->session->set_userdata($data);
						$this->session->set_flashdata('message', '<p style="color:green;"><i class="material-icons">check</i>Bienvenue</p>');
						redirect('accueil_entreprise');
					}
					$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Email or Password Incorrect</p>');
                	redirect('login');
				}else{
					$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Email or Password Incorrect</p>');
                	redirect('login');
				}
			}else{
                $this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Il est important de preciser le type!</p>');
                redirect('login');
            }
              
        }
		
	}

	#####################################################################
	public function upload_profile(){

	}

	
	public function _rules_login(){

		$this->form_validation->set_rules('email', 'Email obligatoire', 'trim|required');
		$this->form_validation->set_rules('pwd', 'Password Obligatoire', 'trim|required');
		$this->form_validation->set_rules('typePers', 'Type Obligatoire', 'trim');
		$this->form_validation->set_rules('typeEnt', 'Type Obligatoire', 'trim');

        $this->form_validation->set_error_delimiters('<span class="white-text center red" style="color:red;">', '</span>');
	}

	#####################################################################

}
?>
