<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function insert_user($filename){
			$data['fullname']= $this->input->post('fullname');
            $data['address']= $this->input->post('address');
            $data['phone']= $this->input->post('phone');
            $data['username']= $this->input->post('username');
            $data['password']= md5($this->input->post('password'));
            $data['role']= $this->input->post('role');
            $data['image']= $filename;
            return $this->db->insert('customer/retailer',$data);
        }
        public function edit_custregister($id){
            $query=$this->db->get_where("customer/retailer",array('id' => $id));
            $data['records']=$query->row();
            return $data;
        }

        public function validate_user()
    {
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));
        $password = md5($password);
        $this->db->select('*');
        $this->db->from('customer/retailer');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get();
        if( $result->num_rows() == 1)
        {
            return $result->row();
        }
        else
        {
            return FALSE;
        }
    }

}

/* End of file customer.php */
/* Location: ./application/models/front/customer.php */