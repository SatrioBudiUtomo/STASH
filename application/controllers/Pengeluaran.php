<?php 

class Pengeluaran extends CI_Controller {

	public function index(){



		$data['pengeluaran'] = $this->ModelPengeluaran->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengeluaran', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		
		$this->load->model('ModelPengeluaran');


		$tanggal = $this->input->post('tanggal');	
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');


		$data = array(
			'tanggal'			=> $tanggal,
			'keterangan'			=> $keterangan,
			'nominal'		=> $nominal
			
		);

		$this->db->set($data);
		$this->db->insert($this->db->$data . 'tb_pengeluaran');
		redirect('pengeluaran/index');
	}

	public function	hapus($id){
		$where = array('id' => $id);
		$this->ModelPengeluaran->hapus_data($where, 'tb_pengeluaran');
		redirect('pengeluaran/index');
	}


	public function edit($id){
		$where = array('id' => $id);
		$data['pengeluaran'] = $this->ModelPengeluaran->edit_data($where, 'tb_pengeluaran')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit-pengeluaran', $data);
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

		$this->ModelPengeluaran->update_data($where, $data, 'tb_pengeluaran');
		redirect('pengeluaran/index'); 
	}

}

 ?>