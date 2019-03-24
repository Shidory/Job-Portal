<?php 

    class Competences{

        private $idCompetences;
        private $nomCompetences;
        private $fk_idDemandeur;

        public Competences($idCompetences, $nomCompetences, $fk_idDemandeur){

            $this->idCompetences = $idCompetences;
            $this->nomCompetences = $nomCompetences;
            $this->fk_idDemandeur = $id_idDemandeur;
        }

        public function getIdCompetences(){
            return $this->idCompetences;
        }

        
    }
?>