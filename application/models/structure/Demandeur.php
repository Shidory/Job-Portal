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
            return $this->Titre;
        }
    }
?>