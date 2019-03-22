<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	#####################################################################
	public function __construct(){

		parent::__construct();

		$this->load->model('SignInModel');
	}

	#####################################################################
	public function index()
	{
		$this->V_sign_in();
	}
	#####################################################################
	#							LOAD VIEWS								#
	#####################################################################
	public function V_sign_in(){

		$this->load->view('sign_in');
	}

	#####################################################################
	public function V_login(){

		
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
	public function sign_in(){

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
		var_dump($_FILES['image']['name']);die();
		if (isset($_FILES['image']
		)){
		// 	if($_FILES['image']['size'] <= 102400){
		// 		$url = 'upload/account_profile';
		// 		$image=basename($_FILES['image']['name']);
		// 		$image=str_replace(' ','|',$image);
		// 		$type=explode(".",$image);
		// 		$type=$type[count($type)-1];
				
		// 		if(in_array($type,array('jpg','jpeg','png','JPG','JPEG','PNG'))){
	
		// 			$tmppath="upload/account_profile/".$_POST['nom'].".".$type;
		// 			if(is_uploaded_file($_FILES["image"]["tmp_name"]))
		// 			{	

		// 				move_uploaded_file($_FILES['image']['tmp_name'],$tmppath);
		// 				$sign_in['data'] = $this->SignInModel->sign_in($nom, $prenom, $titre, $adresse, $email, $telephone, $genre, $datenaiss, 
		// 				$nationalite, $tmppath, $pseudo, $pwd);
						
		// 				$this->load->view('home', $sign_in);
		// 				return $tmppath;
		// 			}
		// 		}
		// 		else{
		// 			echo 'Format invalide, seul les formats: JPEG, PNG sont autorisés.';
		// 		}
		// 	}
		// 	else{
		// 		echo 'Taille invalide, importez un fichier de taille inférieur à 100ko.';
		// 	}
		echo 'ce bon';
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
