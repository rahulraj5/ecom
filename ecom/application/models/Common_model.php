<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model {
	private $table1 = 'products_format';

	function getAllRecords($table){
		$query = $this->db->get($table);
		return $query->result_array();
	}

	function getSingleRecordById($table,$conditions){
		$query = $this->db->get_where($table,$conditions);
		return $query->row_array();
	}

	function addRecords($table,$post_data){
		$this->db->insert($table,$post_data); 
		return $this->db->insert_id();
	}

	function getwhere($table,$conditions)
	{
		$query = $this->db->get_where($table,$conditions);
		// return $query;
		return $query->result_array();
		//$this->db->last_query(); //die;
	}

	function updateRecords($table, $post_data, $where_condition){
		$this->db->where($where_condition);
		return $this->db->update($table, $post_data); 
	}

	function deleteRecords($table,$where_condition){
		$this->db->where($where_condition);
		return $this->db->delete($table);
	}

	public function GetWheresubcategory($whr){
		$sql = "SELECT c1.*,c2.category_name as parent_category_name
				FROM categories as c1 ,categories as c2
				$whr";
		$result = $this->db->query($sql)->result_array();
		// echo $this->db->last_query();
		return $result;		
	}

	public function GetWheresubSubcategory($whr){
		$sql = "SELECT c1.*,c2.category_name as parent_category_name
				FROM categories as c1 ,categories as c2
				$whr";
		$result = $this->db->query($sql)->result_array();
		// echo $this->db->last_query();
		return $result;		

	}
	public function getwhrcategoiesbycatid($whr){

		$sql = "SELECT *

				FROM categories

				$whr";

		$result = $this->db->query($sql)->result_array();

		// echo $this->db->last_query(); die;

		return $result;	
	}

	function insert($data)
	{
		$this->db->insert_batch('products_format', $data);
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
		$this->db->from('products_format');
		$query=$this->db->get();
		return $query->result();
	}

	public function get($where) {
		return $this->db->get_where($this->table1, $where);
	  }
	  
	  public function getAll() {
		return $this->db->get($this->table1);
	  }
	
	  public function getFields() {
		return $this->db->list_fields($this->table1);
	  }
	
	  public function getCol() {
		return $this->db->get($this->table1)->num_fields();
	  }
	
	  public function post($data) {
		$this->db->insert($this->table1, $data);
	  }
	
	  public function update($where, $data) {
		$this->db->where('id', $where);
		$this->db->update($this->table1, $data);
	  }
	
	  public function delete($where) {
		$this->db->where('id', $where);
		$this->db->delete($this->table1);
	  }
	
	  public function post_batch($data){
		$this->db->insert_batch($this->table1, $data);
	  }
}