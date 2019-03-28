<?php 

    class DemandeurDAO extends CI_Model{

        public function sign_up($data){
            $table = "demandeur";
            return $this->db->insert($this->table, $data);
        }
    }
?>