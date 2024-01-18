<?php
class Perumahan_model extends CI_Model{

	private $table = "tbl_perumahan";
	
	function get_perumahan(){
		$hsl=$this->db->query("SELECT * FROM tbl_perumahan");
		return $hsl;
	}

	function get_kecamatan(){
		$hsl=$this->db->query("SELECT * FROM tbl_kecamatan");
		return $hsl;
	}

	function insert_perumahan($data){
		return $this->db->insert($this->table, $data);
	}

	function update_perumahan($id_perumahan, $data){
		return $this->db->update($this->table, $data, array("id_perumahan" => $id_perumahan));
	}

	function delete_perumahan($id_perumahan){
		$hsl=$this->db->query("DELETE FROM tbl_perumahan WHERE id_perumahan='$id_perumahan'");
		return $hsl;
	}

	function get_detail($id_perumahan){
		$hsl=$this->db->query("SELECT * FROM tbl_perumahan where id_perumahan='$id_perumahan'");
		return $hsl;
	}
	
	function count_all_perumahan(){
    	$query = $this->db->count_all('tbl_perumahan');
    	return $query;
    }

}