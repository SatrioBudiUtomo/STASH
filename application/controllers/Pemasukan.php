<?php 

class Pemasukan extends CI_Controller {

	public function index(){



		$data['pemasukan'] = $this->ModelPemasukan->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pemasukan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		
		$this->load->model('ModelPemasukan');


		$tanggal = $this->input->post('tanggal');	
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');


		$data = array(
			'tanggal'			=> $tanggal,
			'keterangan'			=> $keterangan,
			'nominal'		=> $nominal
			
		);

		$this->db->set($data);
		$this->db->insert($this->db->$data . 'tb_pemasukan');
		redirect('pemasukan/index');
	}

	public function	hapus($id){
		$where = array('id' => $id);
		$this->ModelPemasukan->hapus_data($where, 'tb_pemasukan');
		redirect('pemasukan/index');
	}


	public function edit($id){
		$where = array('id' => $id);
		$data['pemasukan'] = $this->ModelPemasukan->edit_data($where, 'tb_pemasukan')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit-pemasukan', $data);
		$this->load->view('templates/footer');
	}


	public function update(){

		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');	
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');

		$data = array(
			'tanggal'			=> $tanggal,
			'keterangan'			=> $keterangan,
			'nominal'		=> $nominal

		);

		$where = array(
			'id' => $id
		);

		$this->ModelPemasukan->update_data($where, $data, 'tb_pemasukan');
		redirect('pemasukan/index'); 
	}

}

 ?>