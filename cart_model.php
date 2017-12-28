<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public function getallbooks()
	{
		$query = $this->db->get('book_detail');
		return $query->result_array();
	}

	

}

/* End of file cart_model.php */
/* Location: ./application/models/front/cart_model.php */