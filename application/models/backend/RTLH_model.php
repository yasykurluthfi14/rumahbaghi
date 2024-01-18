<?php
class RTLH_model extends CI_Model{
	
	private $table = "tbl_rtlh";
	
	function get_RTLH(){
		$hsl=$this->db->query("SELECT * FROM tbl_rtlh");
		return $hsl;
	}

	function insert_rtlh($data){

		return $this->db->insert($this->table, $data);
	}

	function update_rtlh($id_rtlh, $data){
		return $this->db->update($this->table, $data, array("id_rtlh" => $id_rtlh));
	}

	function delete_rtlh($id_rtlh){
		$hsl=$this->db->query("DELETE FROM tbl_rtlh WHERE id_rtlh='$id_rtlh'");
		return $hsl;
	}

	function count_all_rtlh(){
    	$query = $this->db->count_all('tbl_rtlh');
    	return $query;
    }

	function get_detail_rtlh($id_rtlh){
		$hsl=$this->db->query("SELECT * FROM tbl_rtlh where id_rtlh='$id_rtlh'");
		return $hsl;
	}
	
}