<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_model extends CI_Model {

	public function book_detail()
	{
		$query=$this->db->get("book_detail");
		return $query->result();
	}

}

/* End of file load_books.php */
/* Location: ./application/models/front/load_books.php */