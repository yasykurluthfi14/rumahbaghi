<?php
class RTLH extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/RTLH_model','rtlh_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->rtlh_model->get_RTLH();
		$this->load->view('backend/v_RTLH',$x);
		$this->load->helper('text');
	}

	function insert(){
		$data['id_rtlh']=htmlspecialchars($this->input->post('id_rtlh',TRUE),ENT_QUOTES);
		$data['survey_date']=htmlspecialchars($this->input->post('survey_date',TRUE),ENT_QUOTES);
		$data['surveyor_id']=htmlspecialchars($this->input->post('surveyor_id',TRUE),ENT_QUOTES);
		$data['nik']=htmlspecialchars($this->input->post('nik',TRUE),ENT_QUOTES);
		$data['nama']=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$data['sex']=htmlspecialchars($this->input->post('jenis_kelamin',TRUE),ENT_QUOTES);
		$data['alamat']=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
		$data['kelurahan']=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
		$data['kecamatan']=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
		$data['pekerjaan']=htmlspecialchars($this->input->post('pekerjaan',TRUE),ENT_QUOTES);	
		$data['luas_rumah']=htmlspecialchars($this->input->post('luas_rumah',TRUE),ENT_QUOTES);
		$data['pendidikan']=htmlspecialchars($this->input->post('pendidikan',TRUE),ENT_QUOTES);
		$data['jumlah_kk']=htmlspecialchars($this->input->post('jumlah_kk',TRUE),ENT_QUOTES);
		$data['penghasilan']=htmlspecialchars($this->input->post('penghasilan',TRUE),ENT_QUOTES);
		$data['atap']=htmlspecialchars($this->input->post('atap',TRUE),ENT_QUOTES);
		$data['dinding']=htmlspecialchars($this->input->post('dinding',TRUE),ENT_QUOTES);
		$data['kamar_mandi']=htmlspecialchars($this->input->post('kamar_mandi',TRUE),ENT_QUOTES);
		$data['jarak_sumber_air']=htmlspecialchars($this->input->post('jarak_sumber_air',TRUE),ENT_QUOTES);
		$data['lantai']=htmlspecialchars($this->input->post('lantai',TRUE),ENT_QUOTES);
		$data['pencahayaan']=htmlspecialchars($this->input->post('pencahayaan',TRUE),ENT_QUOTES);
		$data['jumlah_penghuni']=htmlspecialchars($this->input->post('jumlah_penghuni',TRUE),ENT_QUOTES);
		$data['sumber_air']=htmlspecialchars($this->input->post('sumber_air',TRUE),ENT_QUOTES);
		$data['sumber_listrik']=htmlspecialchars($this->input->post('sumber_listrik',TRUE),ENT_QUOTES);
		$data['status_tanah']=htmlspecialchars($this->input->post('status_tanah',TRUE),ENT_QUOTES);
		$data['kepemilikan_tanah']=htmlspecialchars($this->input->post('kepemilikan_tanah',TRUE),ENT_QUOTES);
		$data['lokasi_kawasan']=htmlspecialchars($this->input->post('lokasi_kawasan',TRUE),ENT_QUOTES);
		$data['lokasi_koordinat']=htmlspecialchars($this->input->post('lokasi_koordinat',TRUE),ENT_QUOTES);
		$data['status_rumah']=htmlspecialchars($this->input->post('status_rumah',TRUE),ENT_QUOTES);
		$data['kepemilikan_rumah']=htmlspecialchars($this->input->post('kepemilikan_rumah',TRUE),ENT_QUOTES);
		$data['bantuan_perumahan']=htmlspecialchars($this->input->post('bantuan_perumahan',TRUE),ENT_QUOTES);
		$data['count']=htmlspecialchars($this->input->post('count',TRUE),ENT_QUOTES);

		$config['upload_path'] = './theme/foto_rtlh/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['foto_ktp']['name']) && !empty($_FILES['foto1']['name']) && !empty($_FILES['foto2']['name']) && !empty($_FILES['foto3']['name']) && !empty($_FILES['foto4']['name']) && !empty($_FILES['foto5']['name'])){
	    	if ($this->upload->do_upload('foto_ktp')){
	            $img_0 = $this->upload->data();
	            $foto_ktp =$img_0['file_name'];
	        }
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

			$data['foto_ktp'] = $foto_ktp;
			$data['foto_rumah1'] = $foto1;
			$data['foto_rumah2'] = $foto2;
			$data['foto_rumah3'] = $foto3;
			$data['foto_rumah4'] = $foto4;
			$data['foto_rumah5'] = $foto5;

	        $this->rtlh_model->insert_rtlh($data);
	        $this->session->set_flashdata('msg','success');
	        redirect('backend/rtlh');

	    }else{
	        $this->session->set_flashdata('msg','error');
	        redirect('backend/rtlh');
	    }


	    }

		function update(){
			$id_rtlh=htmlspecialchars($this->input->post('id_rtlh',TRUE),ENT_QUOTES);
			$data['surveyor_id']=htmlspecialchars($this->input->post('surveyor_id',TRUE),ENT_QUOTES);
			$data['survey_date']=htmlspecialchars($this->input->post('survey_date',TRUE),ENT_QUOTES);
			$data['nik']=htmlspecialchars($this->input->post('nik',TRUE),ENT_QUOTES);
			$data['nama']=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
			$data['sex']=htmlspecialchars($this->input->post('jenis_kelamin',TRUE),ENT_QUOTES);
			$data['alamat']=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
			$data['kelurahan']=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
			$data['kecamatan']=htmlspecialchars($this->input->post('kecamatan',TRUE),ENT_QUOTES);
			$data['pekerjaan']=htmlspecialchars($this->input->post('pekerjaan',TRUE),ENT_QUOTES);	
			$data['luas_rumah']=htmlspecialchars($this->input->post('luas_rumah',TRUE),ENT_QUOTES);
			$data['pendidikan']=htmlspecialchars($this->input->post('pendidikan',TRUE),ENT_QUOTES);
			$data['jumlah_kk']=htmlspecialchars($this->input->post('jumlah_kk',TRUE),ENT_QUOTES);
			$data['penghasilan']=htmlspecialchars($this->input->post('penghasilan',TRUE),ENT_QUOTES);
			$data['atap']=htmlspecialchars($this->input->post('atap',TRUE),ENT_QUOTES);
			$data['dinding']=htmlspecialchars($this->input->post('dinding',TRUE),ENT_QUOTES);
			$data['kamar_mandi']=htmlspecialchars($this->input->post('kamar_mandi',TRUE),ENT_QUOTES);
			$data['jarak_sumber_air']=htmlspecialchars($this->input->post('jarak_sumber_air',TRUE),ENT_QUOTES);
			$data['lantai']=htmlspecialchars($this->input->post('lantai',TRUE),ENT_QUOTES);
			$data['pencahayaan']=htmlspecialchars($this->input->post('pencahayaan',TRUE),ENT_QUOTES);
			$data['jumlah_penghuni']=htmlspecialchars($this->input->post('jumlah_penghuni',TRUE),ENT_QUOTES);
			$data['sumber_air']=htmlspecialchars($this->input->post('sumber_air',TRUE),ENT_QUOTES);
			$data['sumber_listrik']=htmlspecialchars($this->input->post('sumber_listrik',TRUE),ENT_QUOTES);
			$data['status_tanah']=htmlspecialchars($this->input->post('status_tanah',TRUE),ENT_QUOTES);
			$data['kepemilikan_tanah']=htmlspecialchars($this->input->post('kepemilikan_tanah',TRUE),ENT_QUOTES);
			$data['lokasi_kawasan']=htmlspecialchars($this->input->post('lokasi_kawasan',TRUE),ENT_QUOTES);
			$data['lokasi_koordinat']=htmlspecialchars($this->input->post('lokasi_koordinat',TRUE),ENT_QUOTES);
			$data['status_rumah']=htmlspecialchars($this->input->post('status_rumah',TRUE),ENT_QUOTES);
			$data['kepemilikan_rumah']=htmlspecialchars($this->input->post('kepemilikan_rumah',TRUE),ENT_QUOTES);
			$data['bantuan_perumahan']=htmlspecialchars($this->input->post('bantuan_perumahan',TRUE),ENT_QUOTES);
	
			
		$config['upload_path'] = './theme/foto_rtlh/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['foto_ktp']['name']) && !empty($_FILES['foto1']['name']) && !empty($_FILES['foto2']['name']) && !empty($_FILES['foto3']['name']) && !empty($_FILES['foto4']['name']) && !empty($_FILES['foto5']['name'])){
	    	if ($this->upload->do_upload('foto_ktp')){
	            $img_0 = $this->upload->data();
	            $foto_ktp =$img_0['file_name'];
	        }
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

			$data['foto_ktp'] = $foto_ktp;
			$data['foto_rumah1'] = $foto1;
			$data['foto_rumah2'] = $foto2;
			$data['foto_rumah3'] = $foto3;
			$data['foto_rumah4'] = $foto4;
			$data['foto_rumah5'] = $foto5;

	        $this->rtlh_model->update_rtlh($id_rtlh, $data);
	        $this->session->set_flashdata('msg','success');
	        redirect('backend/rtlh');

	    }else{
			
			
	        $this->session->set_flashdata('msg','error');
	        redirect('backend/rtlh');
	    }
			
			}

	function delete(){
		$id_rtlh=$this->input->post('kode',TRUE);
		$this->rtlh_model->delete_rtlh($id_rtlh);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/rtlh');
	}


}