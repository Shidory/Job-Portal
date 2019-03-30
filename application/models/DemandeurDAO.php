<?php 

    class DemandeurDAO extends CI_Model{

        #################################################################
        public function __construct(){

            parent::__construct();

            $table_dem="demandeur";

        }

        #################################################################
        public function M_sign_up($data){

            return $this->db->insert($table_dem, $data);
        }

        #################################################################
        public function M_login($data){

            $request = $this->db->select($table_dem, 'email', 'pwd');

            if ('email'==$data[0] AND 'pwd'==$data[1]){

                $this->load->view('home');
            }
        }

        #################################################################
        function get_by_email($email){

            $this->db->order_by($this->id, 'DESC');
            $this->db->where('emailDemandeur',$email);
            return $this->db->get($this->table_dem)->row();
        }

        #################################################################
        function get_by_pseudo($pseudo){

        
        }
    }
?>