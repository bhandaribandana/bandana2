<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ourteam_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function add_ourteam(){
        $query=$this->db->get("our_team");
        $data['records']=$query->result();
        $this->load->view('front/ourteam_view',$data);
        }
    }
        