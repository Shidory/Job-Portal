<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	#####################################################################
	public function __construct(){

		parent::__construct();

		$this->load->model('DemandeurDAO');
		
	}

	#####################################################################
	public function index()
	{
		$this->V_sign_up();
	}
	#####################################################################
	#							LOAD VIEWS								#
	#####################################################################
	public function V_sign_up(){

		$this->load->view('sign_up');
	}

	#####################################################################
	public function V_login(){

		$this->load->view('login');
	}

	#####################################################################
	public function V_home(){

		$this->load->view('home');
	}

	#####################################################################
	public function do_upload()
	{
			$config['upload_path']          = base_url("upload/profile");
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('sign_in', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					
					$this->load->view('upload_success', $data);
			}
	}

	#####################################################################
	public function C_sign_up(){

		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$titre = $this->input->post('titre');
		$adresse = $this->input->post('adresse');
		$email = $this->input->post('email');
		$telephone = $this->input->post('telephone');
		$genre = $this->input->post('genre');
		$datenaiss = $this->input->post('datenaiss');
		$nationalite = $this->input->post('nationalite');
		$etatcivil = $this->input->post('etatcivil');
		$pseudo = $this->input->post('pseudo');
		$pwd =	$this->input->post('pwd');
		$pwdconf =	$this->input->post('pwdconf');
		
		if (isset($nom, $prenom, $titre, $adresse, $email, $telephone, $genre, $datenaiss, 
		$nationalite, $etatcivil, $pseudo, $pwd, $pwdconf
		)){
			
			$data = array(
				
				'nomDemandeur'=>$nom,
				'prenomDemandeur'=>$prenom,
				'titre'=>$titre,
				'prenomDemandeur'=>$prenom,
				'adresseDemandeur'=>$adresse,
				'emailDemandeur'=>$email,
				'telephoneDemandeur'=>$telephone,
				'genre'=>$genre,
				'prenomDemandeur'=>$prenom,
				'dateNaissance'=>$datenaiss,
				'nationalite'=>$nationalite,
				'etatCivil'=>$etatcivil,
				'pseudo'=>$pseudo,
				'pwd'=>$pwd,
			);

			$this->DemandeurDAO->M_sign_up($data);
			$this->load->view('home');
		}	
		else{
			
			$error['error'] = 'Erreur dans les données';
			$this->load->view('erreur', $error);
			
		}
	}

	#####################################################################
	public function login(){

		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');
	}

	#####################################################################
	public function upload_profile(){

	}
}
?>
