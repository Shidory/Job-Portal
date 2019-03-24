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
        public getId(){
            return $this->id;
        }

        public getNomDemandeur(){
            return $this->nomDemandeur;
        }

        public getPrenomDemandeur(){
            return $this->prenomDemandeur;
        }

        public getTitre(){
            return $this->titre;
        }

        public getAdresseDemandeur(){
            return $this->adresseDemandeur;
        }

        public getEmailDemandeur(){
            return $this->emailnomDemandeur;
        }

        public getTelephoneDemandeur(){
            return $this->telephoneDemandeur;
        }

        public getGenre(){
            return $this->genre;
        }

        public getDateNaissance(){
            return $this->dateNaissance;
        }

        public getNationalite(){
            return $this->nationalite;
        }

        public getEtatCivil(){
            return $this->etatCivil;
        }

        public getImageProfile(){
            return $this->imageProfile;
        }

        public getPseudo(){
            return $this->pseudo;
        }

        public getPwd(){
            return $this->pwd;
        }

        public getEtat(){
            return $this->etat;
        }
        #################################################################
        #                           SETTERS                             #
        #################################################################
        public setId($id){
            $this->id = $id;
        }

        public setNomDemandeur($nomDemandeur){
            $this->nomDemandeur = $nomDemandeur;
        }

        public setPrenomDemandeur($prenomDemandeur){
            $this->prenomDemandeur = $prenomDemandeur;
        }

        public setTitre($titre){
            $this->titre = $titre;
        }

        public setAdresseDemandeur($adresseDemandeur){
            $this->adresseDemandeur = $adresseDemandeur;
        }

        public setEmailDemandeur($emailDemandeur){
            $this->emailDemandeur = $emailDemandeur;
        }

        public setTelephoneDemandeur($telephoneDemandeur){
            $this->telephoneDemandeur = $telephoneDemandeur;
        }

        public setGenre($genre){
            $this->genre = $genre;
        }

        public setDateNaissance($dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }

        public setNationalite($nationalite){
            $this->nationalite = $nationalite;
        }
    }
?>