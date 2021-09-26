<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_model extends CI_Model {
	// private $table = 'products_format';

	public function __construct() {
		parent::__construct();
	}
	public function insert_batch($data){
		$this->db->insert_batch('products_format',$data);
		if($this->db->affected_rows()>0)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
	public function product_list()
	{
		$this->db->select('*');
		$this->db->from('product');
		$query=$this->db->get();
		return $query->result();
	}

	// public function get($where) {
	// 	return $this->db->get_where($this->table, $where);
	//   }
	  
	//   public function getAll() {
	// 	return $this->db->get($this->table);
	//   }
	
	//   public function getFields() {
	// 	return $this->db->list_fields($this->table);
	//   }
	
	//   public function getCol() {
	// 	return $this->db->get($this->table)->num_fields();
	//   }
}