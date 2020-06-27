<?php 

	class Jabatan extends CI_Controller {

		public function index(){



			$data['jabatan'] = $this->ModelJabatan->tampil_data()->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('jabatan', $data);
			$this->load->view('templates/footer');
		}

		public function tambah_aksi(){
			
			$this->load->model('ModelJabatan');


			$nama = $this->input->post('nama');	
			$deskripsi = $this->input->post('deskripsi');


			$data = array(
				'nama'			=> $nama,
				'deskripsi'			=> $deskripsi
				
			);

			$this->db->set($data);
			$this->db->insert($this->db->$data . 'tb_jabatan');
			redirect('jabatan/index');
		}

		public function	hapus($id){
			$where = array('id' => $id);
			$this->ModelJabatan->hapus_data($where, 'tb_jabatan');
			redirect('jabatan/index');
		}

		public function edit($id){
			$where = array('id' => $id);
			$data['jabatan'] = $this->ModelJabatan->edit_data($where, 'tb_jabatan')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('edit-jabatan', $data);
			$this->load->view('templates/footer');
		}

		public function update(){

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');	
			$nim = $this->input->post('deskripsi');
		}

	}
?>