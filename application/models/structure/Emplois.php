<?php 

    class Emplois{

        private $idEmplois;
        private $fk_idDemandeur;
        private $nomEntreprise;
        private $posteEmplois;
        private $dateDebutEmplois;
        private $dateFinEmplois;

        public Emplois($idEmplois,$fk_idDemandeur, $nomEntreprise, $posteEmplois, $dateDebutEmplois, $dateFinEmplois){

            $this->idEmplois = $idEmplois;
            $this->fk_idDemandeur = $fk_idDemandeur;
            $this->nomEntreprise = $nomEntreprise;
            $this->posteEmplois = $posteEmplois;
            $this->dateDebutEmplois = $dateDebutEmplois;
            $this->dateFinEmplois = $dateFinEmplois;
        }

        public function getIdEmplois(){
            return $this->idEmplois;
        }

        public function getFk_IdDemandeur(){
            return $this->fk_idDemandeur;
        }

        public function getNomEntreprise(){
            return $this->nomEntreprise;
        }

        public function getPostEmplois(){
            return $this->postEmplois;
        }

        public function getDateDebutEmplois(){
            return $this->dateDebutEmplois;
        }

        public function getDateFinEmplois(){
            return $this->dateFinEmplois;
        }

        public function setIdEmplois($idEmplois){
            $this->idEmplois = $idEmplois;
        }

        public function setFk_IdDemandeur(){
            $this->fk_idDemandeur = $fk_idDemandeur;
        }

        public function setNomEntreprise(){
            $this->nomEntreprise = $nomEntreprise;
        }
    }
?>