<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('sign_in');
	}

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
	}
}
