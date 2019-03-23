<?php
    class Demandeur{

        private $id;
        private $nomDemandeur;
        private $prenomDemandeur;
        private $titre;
        private $adresseDemandeur;
        private $emailDemandeur;
        private $telephoneDemandeur;
        private $genre;
        private $dateNaissance;
        private $nationalite;
        private $etatCivil;
        private $image;
        public Demandeur(){

        }

        public function getAttribut($attribut){
            switch($attribut){
                case "id":
                    return $this->id;
                    break;
                
            }
        }
    }
?>