<?php 

    class DemandeurDAO extends CI_Model{

        #################################################################
        public function __construct(){

            parent::__construct();

            $table_dem="demandeur";
            $id = "idDemandeur";

        }

        #################################################################
        public function M_sign_up($data){

            $this->db->insert($table_dem, $data);
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

            $this->db->order_by('idDemandeur', 'DESC');
            $this->db->where('emailDemandeur',$email);

            return $this->db->get('demandeur')->row();
        }

        #################################################################
        function get_by_pseudo($pseudo){

            $this->db->order_by('idDemandeur', 'DESC');
            $this->db->where('pseudo',$pseudo);

            return $this->db->get('demandeur')->result();
        }

        #################################################################
    }
?>