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
		$this->load->view('sign_in');
	}

	#####################################################################
	public function upload_image(){

		if($_FILES['image']['size'] <= 102400){
			$url = 'upload/account_profile';
			$image=basename($_FILES['image']['name']);
			$image=str_replace(' ','|',$image);
			$type=explode(".",$image);
			$type=$type[count($type)-1];
			
			if(in_array($type,array('jpg','jpeg','png','JPG','JPEG','PNG'))){

				$tmppath="upload/account_profile/".$_POST['nom'].".".$type;
				if(is_uploaded_file($_FILES["image"]["tmp_name"]))
				{
					move_uploaded_file($_FILES['image']['tmp_name'],$tmppath);
					return $tmppath;
				}
			}
			else{
				echo 'Format invalide, seul les formats: JPEG, PNG sont autorisés.';
			}
		}
		else{
			echo 'Taille invalide, importez un fichier de taille inférieur à 100ko.';
		}

	}

	#####################################################################
	public function sign_in(){

		$name = $this->input->post('nom');
		$surname = $this->input->post('prenom');
		$title = $this->input->post('titre');
		$adress = $this->input->post('adresse');
		$email = $this->input->post('email');
		$phone = $this->input->post('telephone');
		$genre = $this->input->post('genre');
		$date = $this->input->post('datenaiss');
		$nationality = $this->input->post('nationalite');
		$civilstate = $this->input->post('etatcivil');
		$image = $this->input->post('image');
		$pseudo = $this->input->post('pseudo');
		$pwd =	$this->input->post('pwd');

		if (isset($nom, $surname, $title, $adress, $email,$phone, $genre, $date, 
		$nationality, $civilstate, $image, $pseudo, $pwd
		)){

			$sign_in['data'] = $this->SignInModel->sign_in($name, $surname, $title, $adress, $email,
			$phone, $genre, $date, $nationality, $civilstate, $image, $pseudo, $pwd);
			
			$this->load->view('home', $sign_in);
		}
		if (isset($name, $surname)){
			$sign_in['data'] = $this->SignInModel->sign_in($name, $surname, $title, $adress, $email,
		 	$phone, $genre, $date, $nationality, $civilstate, $image, $pseudo, $pwd);
			
		 	$this->load->view('home', $data);
		}
		else{
			
			$error['error'] = 'Erreur dans les données';
			$this->load->view('erreur', $error);
			
		}
	}
}
