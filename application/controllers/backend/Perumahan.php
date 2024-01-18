<?php
class Perumahan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Perumahan_model','perumahan_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->perumahan_model->get_perumahan();
		$this->load->view('backend/v_perumahan',$x);
		$this->load->helper('text');
	}

	function insert(){
		$data['id_perumahan']=htmlspecialchars($this->input->post('id_perumahan',TRUE),ENT_QUOTES);
		$data['developer']=htmlspecialchars($this->input->post('developer',TRUE),ENT_QUOTES);
		$data['nama_perumahan']=htmlspecialchars($this->input->post('nama_perumahan',TRUE),ENT_QUOTES);
		$data['alamat']=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
		$data['kecamatan']=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
		$data['tipe']=htmlspecialchars($this->input->post('tipe',TRUE),ENT_QUOTES);
		$data['count']=htmlspecialchars($this->input->post('count',TRUE),ENT_QUOTES);

		$config['upload_path'] = './theme/foto_perumahan/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['foto1']['name']) && !empty($_FILES['foto2']['name']) && !empty($_FILES['foto3']['name']) && !empty($_FILES['foto4']['name']) && !empty($_FILES['foto5']['name'])){
	    	
			if ($this->upload->do_upload('foto1')){
	            $img_1 = $this->upload->data();
	            $foto1 =$img_1['file_name'];
	        }
	        if ($this->upload->do_upload('foto2')){
	            $img_2 = $this->upload->data();
	            $foto2=$img_2['file_name'];
	        }
	        if ($this->upload->do_upload('foto3')){
	            $img_3 = $this->upload->data();
	            $foto3=$img_3['file_name'];
	        }
			if ($this->upload->do_upload('foto4')){
	            $img_4 = $this->upload->data();
	            $foto4=$img_4['file_name'];
	        }
			if ($this->upload->do_upload('foto5')){
	            $img_5 = $this->upload->data();
	            $foto5=$img_5['file_name'];
	        }

			$data['image1'] = $foto1;
			$data['image2'] = $foto2;
			$data['image3'] = $foto3;
			$data['image4'] = $foto4;
			$data['image5'] = $foto5;

		
		
		$this->perumahan_model->insert_perumahan($data);
		echo $this->session->set_flashdata('msg','success');
	    redirect('backend/perumahan');
		}
	  }
		    

	function update(){
		$id_perumahan=$this->input->post('id_perumahan',TRUE);
		$data['developer']=htmlspecialchars($this->input->post('developer',TRUE),ENT_QUOTES);
		$data['nama_perumahan']=htmlspecialchars($this->input->post('nama_perumahan',TRUE),ENT_QUOTES);
		$data['alamat']=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
		$data['kecamatan']=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
		$data['tipe']=htmlspecialchars($this->input->post('tipe',TRUE),ENT_QUOTES);

		$config['upload_path'] = './theme/foto_perumahan/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['foto1']['name']) && !empty($_FILES['foto2']['name']) && !empty($_FILES['foto3']['name']) && !empty($_FILES['foto4']['name']) && !empty($_FILES['foto5']['name'])){
	    	
			if ($this->upload->do_upload('foto1')){
	            $img_1 = $this->upload->data();
	            $foto1 =$img_1['file_name'];
	        }
	        if ($this->upload->do_upload('foto2')){
	            $img_2 = $this->upload->data();
	            $foto2=$img_2['file_name'];
	        }
	        if ($this->upload->do_upload('foto3')){
	            $img_3 = $this->upload->data();
	            $foto3=$img_3['file_name'];
	        }
			if ($this->upload->do_upload('foto4')){
	            $img_4 = $this->upload->data();
	            $foto4=$img_4['file_name'];
	        }
			if ($this->upload->do_upload('foto5')){
	            $img_5 = $this->upload->data();
	            $foto5=$img_5['file_name'];
	        }

			$data['image1'] = $foto1;
			$data['image2'] = $foto2;
			$data['image3'] = $foto3;
			$data['image4'] = $foto4;
			$data['image5'] = $foto5;
		
		$this->perumahan_model->update_perumahan($id_perumahan, $data);
		echo $this->session->set_flashdata('msg','success');
	    redirect('backend/perumahan');
	    
		}
	}
	
	function delete(){
		$id_perumahan=$this->input->post('kode',TRUE);
		$this->perumahan_model->delete_perumahan($id_perumahan);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/perumahan');
	}


}