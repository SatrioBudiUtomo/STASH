<?php 

class ModelAnggota extends CI_Model{

	public function tampil_data(){

		return $this->db->get('tb_anggota');

	}

	public function input_data(){
        $this->db->insert('tb_anggota');
    }

    public function hapus_data($where, $table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }

    public function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }

    public function update_data($where,$data,$table){
    	$this->db->where($where);
    	$this->db->update($table,$data);
    }

    public function detail_data($id = NULL){
    	$query = $this->db->get_where('tb_anggota', array('id' => $id))->row();
    	return $query;
    }
}
 
