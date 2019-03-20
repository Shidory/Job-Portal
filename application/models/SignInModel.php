<?php
    class SignInModel extends CI_Model{

        public function sign_in($name, $surname, $title, $adress, $email,$phone, $genre, $date, $nationality, 
            $civilstate, $image, $pseudo, $pwd){

            $request = "INSERT INTO demandeur VALUES($name, $surname, $title, $adress, $email,$phone, $genre, $date, $nationality, 
                $civilstate, $image, $pseudo, $pwd)";
        }
    }

?>