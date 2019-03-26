<?php 

    class DemandeDAO{

        public function sign_in($demandeur){

            $request = "INSERT INTO demandeur VALUES(O, :nomDemandeur, :prenomDemandeur, :titre, :adresseDemandeur, :emailDemandeur,
            telephoneDemandeur, :genre, :dateNaissance, :nationalite, :etatCivil, :imageProfile, :pseudo, :pwd,
            etat )";

            $prepare = $this->db->prepare($request);
        }
    }
?>