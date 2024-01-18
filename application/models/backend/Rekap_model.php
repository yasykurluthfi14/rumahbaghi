<?php
class Rekap_model extends CI_Model{
	
	function get_kecamatan(){
		$hsl=$this->db->query("SELECT * FROM tbl_kecamatan");
		return $hsl;
	}

	function gumay1(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='GUMAY TALANG'");
       return $hsl->row()->kec;
	}
	function gumay2(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='GUMAY ULU'");
       return $hsl->row()->kec;
	}
	function jarai(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='JARAI'");
       return $hsl->row()->kec;
	}
	function kikim1(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='KIKIM BARAT'");
       return $hsl->row()->kec;
	}
	function kikim2(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='KIKIM SELATAN'");
       return $hsl->row()->kec;
	}
	function kikim3(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='KIKIM TENGAH'");
       return $hsl->row()->kec;
	}
	function kikim4(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='KIKIM TIMUR'");
       return $hsl->row()->kec;
	}
	function kagung(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='KOTA AGUNG'");
       return $hsl->row()->kec;
	}
	function lahat(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='LAHAT'");
       return $hsl->row()->kec;
	}
	function mbarat(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='MERAPI BARAT'");
       return $hsl->row()->kec;
	}
	function msel(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='MERAPI SELATAN'");
       return $hsl->row()->kec;
	}
	function mtim(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='MERAPI TIMUR'");
       return $hsl->row()->kec;
	}
	function mpay(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='MUARA PAYANG'");
       return $hsl->row()->kec;
	}
	function mulu(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='MULAK ULU'");
       return $hsl->row()->kec;
	}
	function pagun(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='PAGAR GUNUNG'");
       return $hsl->row()->kec;
	}
	function pabul(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='PAJAR BULAN'");
       return $hsl->row()->kec;
	}
	function psek(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='PSEKSU'");
       return $hsl->row()->kec;
	}
	function pupin(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='PULAU PINANG'");
       return $hsl->row()->kec;
	}
	function tspu(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='TANJUNG SAKTI PUMI'");
       return $hsl->row()->kec;
	}
	function tspi(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='TANJUNG SAKTI PUMU'");
       return $hsl->row()->kec;
	}
	function tate(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='TANJUNG TEBAT'");
       return $hsl->row()->kec;
	}
	function lase(){
		$hsl=$this->db->query("SELECT COUNT(kecamatan) as kec FROM tbl_perumahan WHERE kecamatan='LAHAT SELATAN'");
       return $hsl->row()->kec;
	}
    

}