<?php
class Backlog_model extends CI_Model{
	
	function get_backlog(){
		$hsl=$this->db->query("SELECT * FROM tbl_backlog");
		return $hsl;
	}

	function insert_backlog($id_backlog, $kelurahan, $kecamatan, $backlog){
		$hsl=$this->db->query("INSERT INTO tbl_backlog(id_backlog,kelurahan,kecamatan,backlog) VALUES ('$id_backlog','$kelurahan','$kecamatan','$backlog')");
		return $hsl;
	}

	function update_backlog($id_backlog, $kelurahan, $kecamatan, $backlog){
		$hsl=$this->db->query("UPDATE tbl_backlog SET kelurahan='$kelurahan',kecamatan='$kecamatan',backlog='$backlog' WHERE id_backlog='$id_backlog'");
		return $hsl;
	}

	function delete_backlog($id_backlog){
		$hsl=$this->db->query("DELETE FROM tbl_backlog WHERE id_backlog='$id_backlog'");
		return $hsl;
	}

	function count_all_backlog(){
    	$query = $this->db->count_all('tbl_backlog');
    	return $query;
    }

	function sum_all_backlog(){
    	return $this->db->query("SELECT backlog FROM tbl_backlog");
    }
}