<? <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function view_bookcategory(){
            $query=$this->db->get("book_category");
            return $query->result();
        }
    public function view_booksubcategory(){
            $query=$this->db->get("book_subcategory");
            return $query->result();
        }

        public function get_book_category($id)
        {
        	$this->db->where('cat_id',$id);
        	$query=$this->db->get('book_detail');
        	return $query->result();
        }
        public function get_book_sub($id)
        {            
        	$this->db->where('subcat_id',$id);
        	$query=$this->db->get('book_detail');
        	return $query->result();
        }


}

/* End of file category_model.php */
/* Location: ./application/models/front/category_model.php */