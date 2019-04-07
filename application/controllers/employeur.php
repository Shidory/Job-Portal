<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employeur extends CI_Controller {

	#####################################################################
	public function __construct(){

        parent::__construct();
    }

    public function C_sign_up(){

		$this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Remplissez les champs obligatoires</p>');
			redirect('employeur/sign_up');
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
						$nom = $this->input->post('nomEmployeur', TRUE);
						$prenom = $this->input->post('prenomEmployeur', TRUE);
						$titre = $this->input->post('titre', TRUE);
						$adresse = $this->input->post('adresseEmployeur', TRUE);
						$email = $this->input->post('emailEmployeur', TRUE);
						$site = $this->input->post('siteEmployeur', TRUE);
						$codePostal = $this->input->post('codePostal', TRUE);
						$fax = $this->input->post('fax', TRUE);
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
							redirect('welcome/V_home');
						}
						catch (Exception $e){
							$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Create Record Failed >>'.$e.'</p>');
							redirect('welcome/V_sign_up');
						}
							
					}
					else{
						$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Password not much</p>');
						redirect('welcome/V_sign_up');
					}
				}
				else{
					$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Ce Pseudo est deja attribué</p>');
					redirect('welcome/V_sign_up');
				}
			}
			else{
				$this->session->set_flashdata('message', '<p style="color:red;"><i class="material-icons">cancel</i> Cet Email existe deja</p>');
				redirect('welcome/V_sign_up');
			}
				
		}
		
	}

}		
?>