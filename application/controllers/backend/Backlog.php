<?php
class Backlog extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Backlog_model','backlog_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->backlog_model->get_backlog();
		$this->load->view('backend/v_backlog',$x);
		$this->load->helper('text');
	}

	function insert(){
		$id_backlog=htmlspecialchars($this->input->post('id_backlog',TRUE),ENT_QUOTES);
		$kelurahan=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
		$kecamatan=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
		$backlog=htmlspecialchars($this->input->post('backlog',TRUE),ENT_QUOTES);
		

		
		
		$this->backlog_model->insert_backlog($id_backlog, $kelurahan, $kecamatan, $backlog);
		echo $this->session->set_flashdata('msg','success');
	    redirect('backend/backlog');
	    }
		    

	function update(){
		$id_backlog=$this->input->post('id_backlog',TRUE);
		$kelurahan=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
		$kecamatan=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
		$backlog=htmlspecialchars($this->input->post('backlog',TRUE),ENT_QUOTES);
	
		
		$this->backlog_model->update_backlog($id_backlog, $kelurahan, $kecamatan, $backlog);
		echo $this->session->set_flashdata('msg','success');
	    redirect('backend/backlog');
	    
		}
	
	function delete(){
		$id_backlog=$this->input->post('kode',TRUE);
		$this->backlog_model->delete_backlog($id_backlog);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/backlog');
	}


}