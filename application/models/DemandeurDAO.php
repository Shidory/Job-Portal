<?php 

    class DemandeurDAO extends CI_Model{

        public function M_sign_up($data){
            $table = "demandeur";
            return $this->db->insert($table, $data);
        }
    }
?>