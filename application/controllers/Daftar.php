<?php
class Daftar extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('backend/Perumahan_model','perumahan_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	public function get_kcmtn($kcmtn) {
		$this->db->select('*');
		$this->db->from('tbl_kecamatan');
		$this->db->where('kecamatan', $kcmtn);
		$query = $this->db->get();
		return $query->result();
	   }

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['perumahan'] = $this->perumahan_model->get_perumahan();
		$data['kecamatan'] = $this->perumahan_model->get_kecamatan();
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$hasil = $this->get_kcmtn($kcmtn);
		$this->load->view('daftar_view',$data);
	}

	
	
}