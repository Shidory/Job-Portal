<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	#####################################################################
	public function __construct(){

		parent::__construct();
	}

	#####################################################################
	public function index()
	{
		$this->load->model('sign_in_model');
	}

	#####################################################################
	public function sign_in(){

		$name = $this->input->post('name');
		$surname = $this->input->post('surname');
		$title = $this->input->post('title');
		$adress = $this->input->post('adress');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$genre = $this->input->post('genre');
		$date = $this->input->post('date');
		$nationality = $this->input->post('nationality');
		$civilstate = $this->input->post('civilstate');
		$image = $this->input->post('image');
		$pseudo = $this->input->post('pseudo');
		$pwd =	$this->input->post('pwd');

		$sign_in['data'] = $this->sign_in_model->sign_in($name);
		$this->load->view('home', $data);
	}
}
