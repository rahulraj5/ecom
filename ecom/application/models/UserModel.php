<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model 
{
	// public function GetWhere($tab,$whr)
	// {
		
	// 	$result = $this->db->get_where($tab,$whr)->result_array();

	// 	return $result;
	// }

	// function getAllRecords($table)
	// {
	// 	$query = $this->db->get($table);
	// 	return $query->result_array();
	// }

	public function getSingleRecordById($table,$conditions)
	{

		 $query = $this->db->get_where($table,$conditions);

		 return $query->row_array();
	}

	// function getLimitedRecords($table,$limit)
	// {
	//     $this->db->limit($limit);
	// 	$query = $this->db->get($table);
	// 	return $query->result_array(); 
	// }

	// public function getRecordCount($table, $where_condition)
	// {

	// 	$this->db->where($where_condition);

	// 	$query = $this->db->get($table);

	// 	return $query->num_rows();
	// }

	 function getWhereDataByCol($tab,$whr,$col){
		$this->db->select($col);
		$result = $this->db->get_where($tab,$whr)->row_array();
		//echo $this->db->last_query(); die();
		return $result[$col];
	}

	// public function deleteRecords($table,$where_condition)
	// {   
	// 	$this->db->where($where_condition);
	// 	return $this->db->delete($table); 
	// }

	// public function updateData($tab,$data,$whr)
	// {
	// 	$this->db->update($tab,$data,$whr);
	// 	//echo $this->db->last_query(); die();

	// 	return true;
	// }

	// public function insertMultipleData($tab,$noti_array)
	// {

	// 	$this->db->insert_batch($tab, $noti_array);

	// 	return true;
	// }

	// public function addrecord($table,$post_data)
	// {
	// 	$this->db->insert($table,$post_data);
	// 	return $this->db->insert_id(); 
	// }
}