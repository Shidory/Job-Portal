<?php 

    class DemandeDAO extends CI_Model{

        public function sign_in($demandeur){

            $request = "INSERT INTO demandeur VALUES(O, :nomDemandeur, :prenomDemandeur, :titre, :adresseDemandeur, :emailDemandeur,
            telephoneDemandeur, :genre, :dateNaissance, :nationalite, :etatCivil, :imageProfile, :pseudo, :pwd,
            etat )";

            $ins = $this->db->insert(array(
                'nomDemandeur' => $demandeur->getNomDemandeur(),
                'prenomDemandeur'=> $demandeur->getPrenomDemandeur(),
                'titre'=> $demandeur->getTitre(),
                'adresseDemandeur'=> $demandeur->getAdresseDemandeur(),
                'emailDemandeur'=> $demandeur->getEmailDemandeur(),
                'telephoneDemandeur'=> $demandeur->getTelephoneDemandeur(),
                'genre'=> $demandeur->getGenre(),
                'dateNaissance'=> $demandeur->getDateNaissance(),
                'nationalite'=> $demandeur->getNationalite(),
                'etatCivil'=> $demandeur->getEtatCivl(),
                'imageProfile'=> $demandeur->getImageProfile(),
                'pseudo'=> $demandeur->getPseudo(),
                'pwd'=> $demandeur->getPwd()
            ));


        }
    }
?>