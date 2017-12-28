<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model {

	public function insert_user(){
			$data['fullname']= $this->input->post('fullname');
            $data['address']= $this->input->post('address');
            $data['phone']= $this->input->post('phone');
            $data['username']= $this->input->post('username');
            $data['password']= $this->input->post('password');
            $data['role']= $this->input->post('role');
            return $this->db->insert('customer/retailer',$data);
        }

}

/* End of file customer.php */
/* Location: ./application/models/front/customer.php */