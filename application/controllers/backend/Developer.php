<?php
class Developer extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Developer_model','developer_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->developer_model->get_developer();
		$this->load->view('backend/v_developer',$x);
		$this->load->helper('text');
	}

	function insert(){
		$id_developer=htmlspecialchars($this->input->post('id_developer',TRUE),ENT_QUOTES);
		$nama_developer=htmlspecialchars($this->input->post('nama_developer',TRUE),ENT_QUOTES);
		$telepon=htmlspecialchars($this->input->post('telepon',TRUE),ENT_QUOTES);
		$alamat=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
		
		
		$this->developer_model->insert_developer($id_developer, $nama_developer, $telepon, $alamat);
		echo $this->session->set_flashdata('msg','success');
	    redirect('backend/developer');
	    }
		    

	function update(){
		$id_developer=$this->input->post('id_developer',TRUE);
		$nama_developer=htmlspecialchars($this->input->post('nama_developer',TRUE),ENT_QUOTES);
		$telepon=htmlspecialchars($this->input->post('telepon',TRUE),ENT_QUOTES);
		$alamat=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
		
		$this->developer_model->update_developer($id_developer, $nama_developer, $telepon, $alamat);
		echo $this->session->set_flashdata('msg','success');
	    redirect('backend/developer');
	    
		}
	
	function delete(){
		$id_developer=$this->input->post('kode',TRUE);
		$this->developer_model->delete_developer($id_developer);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/developer');
	}


}