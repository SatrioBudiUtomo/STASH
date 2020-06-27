<?php 

class Anggota extends CI_Controller {

	public function index(){



		$data['anggota'] = $this->ModelAnggota->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('anggota', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		
		$this->load->model('ModelAnggota');


		$nama = $this->input->post('nama');	
		$nim = $this->input->post('nim');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jurusan = $this->input->post('jurusan');
		$jabatan = $this->input->post('jabatan');
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
			'nim'			=> $nim,
			'tgl_lahir'		=> $tgl_lahir,
			'jurusan'		=> $jurusan,
			'jabatan'		=> $jabatan,
			'no_telp'		=> $no_telp,
			'foto'			=> $foto
		);

		$this->db->set($data);
		$this->db->insert($this->db->$data . 'tb_anggota');
		redirect('anggota/index');
	}

	public function	hapus($id){
		$where = array('id' => $id);
		$this->ModelAnggota->hapus_data($where, 'tb_anggota');
		redirect('anggota/index');
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
		$data['anggota'] = $this->ModelAnggota->edit_data($where, 'tb_anggota')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}


	public function update(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');	
		$nim = $this->input->post('nim');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jurusan = $this->input->post('jurusan');
		$jabatan = $this->input->post('jabatan');
		$no_telp = $this->input->post('no_telp');
		$foto 	 = $_FILES['foto'];
		if ($foto=''){}
		else{
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal";
				die();
			}
			else{
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama'			=> $nama,
			'nim'			=> $nim,
			'tgl_lahir'		=> $tgl_lahir,
			'jurusan'		=> $jurusan,
			'jabatan'		=> $jabatan,
			'no_telp'		=> $no_telp,
			'foto'			=> $foto

		);

		$where = array(
			'id' => $id
		);

		$this->ModelAnggota->update_data($where, $data, 'tb_anggota');
		redirect('anggota/index'); 
	}

	public function detail($id){
		$this->load->model('ModelAnggota');
		$detail = $this->ModelAnggota->detail_data($id);
		$data['detail'] =$detail;

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}
}

 ?>