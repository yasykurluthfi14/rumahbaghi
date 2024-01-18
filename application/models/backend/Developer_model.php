<?php
class Developer_model extends CI_Model{
	
	function get_developer(){
		$hsl=$this->db->query("SELECT * FROM tbl_developer");
		return $hsl;
	}

	function insert_developer($id_developer, $nama_developer, $telepon, $alamat){
		$hsl=$this->db->query("INSERT INTO tbl_developer(id_developer,nama_developer,telepon,alamat) VALUES ('$id_developer','$nama_developer','$telepon','$alamat')");
		return $hsl;
	}

	function update_developer($id_developer, $nama_developer, $telepon, $alamat){
		$hsl=$this->db->query("UPDATE tbl_developer SET nama_developer='$nama_developer',telepon='$telepon',alamat='$alamat' WHERE id_developer='$id_developer'");
		return $hsl;
	}

	function delete_developer($id_developer){
		$hsl=$this->db->query("DELETE FROM tbl_developer WHERE id_developer='$id_developer'");
		return $hsl;
	}

	function count_all_developer(){
    	$query = $this->db->count_all('tbl_developer');
    	return $query;
    }
}