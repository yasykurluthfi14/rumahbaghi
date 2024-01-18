<?php
class Rekap extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('backend/Rekap_model','rekap_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['listkecamatan'] = $this->rekap_model->get_kecamatan();
		$data['count'] = $this->rekap_model->gumay1();
		$data['count1'] = $this->rekap_model->gumay2();
		$data['count2'] = $this->rekap_model->jarai();
		$data['count3'] = $this->rekap_model->kikim1();
		$data['count4'] = $this->rekap_model->kikim2();
		$data['count5'] = $this->rekap_model->kikim3();
		$data['count6'] = $this->rekap_model->kikim4();
		$data['count7'] = $this->rekap_model->kagung();
		$data['count8'] = $this->rekap_model->lahat();
		$data['count9'] = $this->rekap_model->mbarat();
		$data['count10'] = $this->rekap_model->msel();
		$data['count11'] = $this->rekap_model->mtim();
		$data['count12'] = $this->rekap_model->mpay();
		$data['count13'] = $this->rekap_model->mulu();
		$data['count14'] = $this->rekap_model->pagun();
		$data['count15'] = $this->rekap_model->pabul();
		$data['count16'] = $this->rekap_model->psek();
		$data['count17'] = $this->rekap_model->pupin();
		$data['count18'] = $this->rekap_model->tspu();
		$data['count19'] = $this->rekap_model->tspi();
		$data['count20'] = $this->rekap_model->tate();
		$data['count21'] = $this->rekap_model->lase();
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('rekap_view',$data);
	}
}