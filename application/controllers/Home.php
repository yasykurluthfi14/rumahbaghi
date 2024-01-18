<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
		$this->load->model('backend/RTLH_model','rtlh_model');
		$this->load->model('backend/Backlog_model','backlog_model');
		$this->load->model('backend/Developer_model','developer_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
	}
	function index(){

		$data['all_rtlh'] = $this->rtlh_model->count_all_rtlh();
		$data['all_backlog'] = $this->backlog_model->sum_all_backlog();
		$data['all_developer'] = $this->developer_model->count_all_developer();
		//$this->output->enable_profiler(TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$data['site_name'] = $site['site_name'];
		$data['site_title'] = $site['site_title'];
		$data['site_desc'] = $site['site_description'];
		$data['site_twitter'] = $site['site_twitter'];
		$data['site_image'] = $site['site_logo_big'];
	
		$home = $this->db->get('tbl_home',1)->row();
		$data['caption_1'] = $home->home_caption_1;
		$data['caption_2'] = $home->home_caption_2;
		$data['bg_header'] = $home->home_bg_heading;
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('home_view',$data);
	}

	
}