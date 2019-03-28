<?php 

    class DemandeurDAO extends CI_Model{

        public function __construct(){
            
        }
        #################################################################
        public function M_sign_up($data){
            $table = "demandeur";
            return $this->db->insert($table, $data);
        }

        #################################################################
        public function M_login($data){

            $table = "demandeur";
            return $this->db->insert($table, $data);
        }

        #################################################################
    }
?>