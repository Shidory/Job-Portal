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
		
		$this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Remplissez les champs obligatoires</p>');
            redirect('sign_up');
		} 
		else {

			$pwd = $this->input->post('pwd');
            $pwdconf = $this->input->post('pwdconf');
            $email = $this->input->post('emailDemandeur',TRUE);
            $pseudo = $this->input->post('pseudo',TRUE);
            $verifEmail = $this->demandeurDAO->get_by_email($email);
			$verifPseudo = $this->demandeurDAO->get_by_pseudo($pseudo);

			if(empty($verifEmail)){

                if(empty($verifPseudo)){

                    if ($pwd == $pwdconf){

						$profile = NULL;
						
						if($_FILES['imageProfile']['name'] != '')
						  
                            $profile = $this->upload_image();
							$nom = $this->input->post('nom', TRUE);
							$prenom = $this->input->post('prenom', TRUE);
							$titre = $this->input->post('titre', TRUE);
							$adresse = $this->input->post('adresse', TRUE);
							$email = $this->input->post('email', TRUE);
							$telephone = $this->input->post('telephone', TRUE);
							$genre = $this->input->post('genre', TRUE);
							$datenaiss = $this->input->post('datenaiss', TRUE);
							$nationalite = $this->input->post('nationalite', TRUE);
							$etatcivil = $this->input->post('etatcivil', TRUE);
							$pseudo = $this->input->post('pseudo', TRUE);
							$pwd =	$this->input->post('pwd', TRUE);
							$pwdconf =	$this->input->post('pwdconf', TRUE);

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

							try{

								$this->DemandeurDAO->M_sign_up($data);
								$this->session->set_flashdata('message', '<p style="color:green;"><i class="material-icons">check</i> Create Record Success</p>');
                            	redirect('home');
							}
			catch(Exception $e){
				$error['error'] = 'Erreur dans les données';
				$this->load->view('erreur', $error);
		   } 
		   /*finally {
				redirect('root/liste');
		   }*/
		}
		else{

			$this->load->view('sign_up');
		}
		
	}

	#####################################################################
	public function C_login(){

		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');

		if(isset($email, $pwd)){

			$data['data'] = array(

				'email' => $email,
				'pwd' => $pwd
			);

			$this->DemandeurDAO->M_login($data);
		}
		
	}

	#####################################################################
	public function upload_profile(){

	}

	#####################################################################
	public function _rules() {

        $this->form_validation->set_rules('nomDemandeur', 'nomdemandeur', 'trim|required');
        $this->form_validation->set_rules('prenomDemandeur', 'prenomdemandeur', 'trim|required');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required');
        $this->form_validation->set_rules('adresseDemandeur', 'adressedemandeur', 'trim|required');
        $this->form_validation->set_rules('emailDemandeur', 'emaildemandeur', 'trim|valid_email|required');
        $this->form_validation->set_rules('telephoneDemandeur', 'telephonedemandeur', 'trim|required');
        $this->form_validation->set_rules('genre', 'genre', 'trim|required');
        $this->form_validation->set_rules('dateNaissance', 'datenaissance', 'trim|required');
        $this->form_validation->set_rules('nationalite', 'nationalite', 'trim|required');
        $this->form_validation->set_rules('etatCivil', 'etatcivil', 'trim|required');
        $this->form_validation->set_rules('imageProfile', 'imageprofile', 'trim');
        $this->form_validation->set_rules('pseudo', 'pseudo', 'trim');
        $this->form_validation->set_rules('pwd', 'pwd', 'trim|required');
        $this->form_validation->set_rules('pwdconf', 'pwdConfirmation', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger" style="color:red;">', '</span>');
    }
}
?>
