<?php 

class ModelDashboard extends CI_Model{

	public function total_masuk(){

		return $this->db->get('SELECT SUM(nominal) as total from tb_pemasukan;');


	}

}
 