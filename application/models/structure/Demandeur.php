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
        private $imageProfile;
        private $pseudo;
        private $pwd;
        private $etat;

        #################################################################
        #                       CONSTRUCTOR                             #
        #################################################################
        public Demandeur($id, $nomDemandeur, $prenomDemandeur, $titre, $adresseDemandeur, $emailDemandeur, 
        $telephoneDemandeur, $genre, $dateNaissance, $nationalite, $etatCivil, $imageProfile, $pseudo,$pwd,
        $etat){

            $this->id = $id;
            $this->nomDemandeur = $nomDemandeur;
            $this->prenomDemandeur = $prenomDemandeur;
            $this->titre = $titre;
            $this->adresseDemandeur = $adresseDemandeur;
            $this->emailDemandeur = $emailDemandeur;
            $this->telephoneDemandeur = $telephoneDemandeur;
            $this->genre = $genre;
            $this->dateNaissance = $dateNaissance;
            $this->nationalite = $nationalite;
            $this->etatCivil = $etatCivil;
            $this->imageProfile = $imageProfile;
            $this->pseudo = $pseudo;
            $this->pwd = $pwd;
            $this->etat = $etat;
        }
        #################################################################
        #                   GETTERS                                     #
        #################################################################
        public function getId(){
            return $this->id;
        }

        public function getNomDemandeur(){
            return $this->nomDemandeur;
        }

        public function getPrenomDemandeur(){
            return $this->prenomDemandeur;
        }

        public function getTitre(){
            return $this->titre;
        }

        public function getAdresseDemandeur(){
            return $this->adresseDemandeur;
        }

        public function getEmailDemandeur(){
            return $this->emailnomDemandeur;
        }

        public function getTelephoneDemandeur(){
            return $this->telephoneDemandeur;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getDateNaissance(){
            return $this->dateNaissance;
        }

        public function getNationalite(){
            return $this->nationalite;
        }

        public function getEtatCivil(){
            return $this->etatCivil;
        }

        public function getImageProfile(){
            return $this->imageProfile;
        }

        public function getPseudo(){
            return $this->pseudo;
        }

        public function getPwd(){
            return $this->pwd;
        }

        public function getEtat(){
            return $this->etat;
        }
        #################################################################
        #                           SETTERS                             #
        #################################################################
        public function setId($id){
            $this->id = $id;
        }

        public function setNomDemandeur($nomDemandeur){
            $this->nomDemandeur = $nomDemandeur;
        }

        public function setPrenomDemandeur($prenomDemandeur){
            $this->prenomDemandeur = $prenomDemandeur;
        }

        public function setTitre($titre){
            $this->titre = $titre;
        }

        public function setAdresseDemandeur($adresseDemandeur){
            $this->adresseDemandeur = $adresseDemandeur;
        }

        public function setEmailDemandeur($emailDemandeur){
            $this->emailDemandeur = $emailDemandeur;
        }

        public function setTelephoneDemandeur($telephoneDemandeur){
            $this->telephoneDemandeur = $telephoneDemandeur;
        }

        public function setGenre($genre){
            $this->genre = $genre;
        }

        public function setDateNaissance($dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }

        public function setNationalite($nationalite){
            $this->nationalite = $nationalite;
        }

        public function setEtat($etatCivil){
            $this->etatCivil = $etatCivil;
        }

        public function setImageProfile($imageProfile){
            $this->imageProfile = $imageProfile;
        }

        public function setPseudo($pseudo){
            $this->pseudo = $pseudo;
        }

        public function setPwd($pwd){
            $this->pwd = $pwd;
        }

        public function setEtat($etat){
            $this->etat = $etat;
        }
    }
?>