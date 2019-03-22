<?php
    class SignInModel extends CI_Model{

        public function sign_in($nom, $prenom, $titre, $adresse, $email,$telephone, $genre, $datenaiss, $nationalite, 
            $etatcivil, $image, $pseudo, $pwd){

            $request = "INSERT INTO demandeur VALUES($nom, $prenom, $titre, $adresse, $email,$telephone, $genre, $datenaiss, $nationalite, 
            $etatcivil, $image, $pseudo, $pwd)";
        }
    }

?>