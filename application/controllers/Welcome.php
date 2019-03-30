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
	public function C_sign_up(){

		$this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Remplissez les champs obligatoires</p>');
			redirect('welcome/sign_up');
		} 
		else {

			$pwd = $this->input->post('pwd');
            $pwdconf = $this->input->post('pwdconf');
            $email = $this->input->post('emailDemandeur',TRUE);
            $pseudo = $this->input->post('pseudo',TRUE);
            $verifEmail = $this->DemandeurDAO->get_by_email($email);
			$verifPseudo = $this->DemandeurDAO->get_by_pseudo($pseudo);

			if(empty($verifEmail)){

                if(empty($verifPseudo)){

                    if ($pwd == $pwdconf){

						$profile = NULL;
							
						if($_FILES['imageProfile']['name'] != '')
						$profile = $this->upload_image();

						$profile = $this->upload_image();
						$nom = $this->input->post('nomDemandeur', TRUE);
						$prenom = $this->input->post('prenomDemandeur', TRUE);
						$titre = $this->input->post('titre', TRUE);
						$adresse = $this->input->post('adresseDemandeur', TRUE);
						$email = $this->input->post('emailDemandeur', TRUE);
						$telephone = $this->input->post('telephoneDemandeur', TRUE);
						$genre = $this->input->post('genre', TRUE);
						$datenaiss = $this->input->post('dateNaissance', TRUE);
						$nationalite = $this->input->post('nationalite', TRUE);
						$etatcivil = $this->input->post('etatCivil', TRUE);
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
							'imageProfile' => $profile,
							'pseudo'=>$pseudo,
							'pwd'=>$pwd,
						);

						try{

							$this->DemandeurDAO->M_sign_up($data);
							$this->session->set_flashdata('message', '<p style="color:green;"><i class="material-icons">check</i> Create Record Success</p>');
							redirect('home');
						}
						catch (Exception $e){
							$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Create Record Failed >>'.$e.'</p>');
							redirect('inscription');
						}
							
					}
					else{
						$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Password not much</p>');
						redirect('inscription');
					}
				}
				else{
					$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Ce Pseudo est deja attribué</p>');
					redirect('inscription');
				}
			}
			else{
				$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Cet Email existe deja</p>');
				redirect('inscription');
			}
				
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
	
	public function upload_image(){
        if ($_FILES['imageProfile']['size'] <= 10240000){

            $url="/uploads/demandeur";
            $image=basename($_FILES['imageProfile']['name']);
            $image=str_replace(' ','|',$image);
            $type=explode(".",$image);
            $type=$type[count($type)-1];

            if(in_array($type,array('jpg','jpeg','png','JPG','JPEG','PNG')))
            {
                $tmppath="uploads/demandeur/".$this->input->post('nomDemandeur',TRUE).".".$type;
                if(is_uploaded_file($_FILES["imageProfile"]["tmp_name"]))
                {
                    move_uploaded_file($_FILES['imageProfile']['tmp_name'],$tmppath);
                    return $tmppath;
                }
            }
            else{
                
                $error = '<p style="color:red;"><i class="material-icons">cancel</i> Format invalide, seul les formats: JPEG, PNG sont autorisés</p>';
                $this->session->set_flashdata('message', $error);
                redirect('inscription'); 
            }
        }
        else{
            $error = '<p style="color:red;"><i class="material-icons">cancel</i> Taille invalide, importez un fichier de taille inférieur à 100ko</p>';
            $this->session->set_flashdata('message', $error);
            redirect('inscription');
        }
    }
}
?>
