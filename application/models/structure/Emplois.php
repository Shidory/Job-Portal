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
    }
?>