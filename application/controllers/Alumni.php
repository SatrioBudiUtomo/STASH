<?php 

	/**
	 * 
	 */
	class Alumni extends CI_Controller
	{
		
		public function index(){



			$data['alumni'] = $this->ModelAlumni->tampil_data()->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('alumni', $data);
			$this->load->view('templates/footer');
		}

		public function tambah_aksi(){

			$this->load->model('ModelAlumni');

			$nama = $this->input->post('nama');
			$angkatan = $this->input->post('angkatan');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$pekerjaan = $this->input->post('pekerjaan');
			$no_telp = $this->input->post('no_telp');
			$foto 	 = $_FILES['foto'];
			if ($foto=''){}else{
				$config['upload_path'] = './assets/foto';
				$config['allowed_types'] = 'jpg|jpeg|png';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Upload Gagal";die();
				}
				else{
					$foto=$this->upload->data('file_name');
				}
			}
			
			$data = array(
			
			'nama'			=> $nama,
			'angkatan'		=> $angkatan,
			'tgl_lahir'		=> $tgl_lahir,
			'pekerjaan'		=> $pekerjaan,
			'foto'			=> $foto,


			);

			$this->db->set($data);
			$this->db->insert($this->db->$data . 'tb_alumni');
			redirect('alumni/index');
		}

		public function	hapus($id){
			$where = array('id' => $id);
			$this->ModelAlumni->hapus_data($where, 'tb_alumni');
			redirect('alumni/index');
		}

		private function _uploadImage(){
		    $config['upload_path']          = './assets/foto/';
		    $config['allowed_types']        = 'gif|jpg|png';
		    $config['file_name']            = $this->id;
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('foto')) {
		        return $this->upload->data("file_name");
		    }
		    
		    return "default.jpg";
		}

		public function edit($id){
		$where = array('id' => $id);
		$data['alumni'] = $this->ModelAlumni->edit_data($where, 'tb_alumni')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit-alumni', $data);
		$this->load->view('templates/footer');
	}

	public function update(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');	
		$angkatan = $this->input->post('angkatan');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$pekerjaan = $this->input->post('pekerjaan');
		$foto 	 = $_FILES['foto'];
			if ($foto=''){}else{
				$config['upload_path'] = './assets/foto';
				$config['allowed_types'] = 'jpg|jpeg|png';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Upload Gagal";die();
				}
				else{
					$foto=$this->upload->data('file_name');
				}
			}

		$data = array(
			
			'nama'			=> $nama,
			'angkatan'		=> $angkatan,
			'tgl_lahir'		=> $tgl_lahir,
			'pekerjaan'		=> $pekerjaan,
			'foto'			=> $foto


			);

		$where = array(
			'id' => $id
		);

		$this->ModelAlumni->update_data($where, $data, 'tb_alumni');
		redirect('alumni/index'); 
	}

	public function detail($id){
		$this->load->model('ModelAlumni');
		$detail = $this->ModelAlumni->detail_data($id);
		$data['detail'] =$detail;

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail-alumni', $data);
		$this->load->view('templates/footer');
	}
	}

 ?>