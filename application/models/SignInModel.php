<?php
    class SignInModel extends CI_Model{

        public function sign_in($nom, $prenom, $titre, $adresse, $email, $telephone, $genre, $datenaiss, 
		$nationalite, $pseudo, $pwd){

            $request = "INSERT INTO demandeur VALUES($nom, $prenom, $titre, $adresse, $email, $telephone, $genre, $datenaiss, 
            $nationalite, $pseudo, $pwd)";
            $prepare = array();
        }

        #################################################################
        public function login($email, $pwd){

        }
    }
?>