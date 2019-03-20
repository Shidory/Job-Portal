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

	}

	#####################################################################
	public function sign_in(){

		$name = $this->input->post('name');
		$surname = $this->input->post('surname');
		var_dump($name,$surname);die();
		// $title = $this->input->post('title');
		// $adress = $this->input->post('adress');
		// $email = $this->input->post('email');
		// $phone = $this->input->post('phone');
		// $genre = $this->input->post('genre');
		// $date = $this->input->post('date');
		// $nationality = $this->input->post('nationality');
		// $civilstate = $this->input->post('civilstate');
		// $image = $this->input->post('image');
		// $pseudo = $this->input->post('pseudo');
		// $pwd =	$this->input->post('pwd');

		// if (isset($name, $surname, $title, $adress, $email,$phone, $genre, $date, 
		// $nationality, $civilstate, $image, $pseudo, $pwd
		// )){

		// 	$sign_in['data'] = $this->SignInModel->sign_in($name, $surname, $title, $adress, $email,
		// 	$phone, $genre, $date, $nationality, $civilstate, $image, $pseudo, $pwd);
			
		// 	$this->load->view('home', $data);
		// }
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
