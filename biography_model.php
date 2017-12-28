<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class biography_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        public function add_biography(){
        $query=$this->db->get("book_category");
        return $query->result();
        $this->load->view('front/biography_view',$data);


       
        }
    }
        