<?php
class Mahasiswa_model extends CI_Model{
	function getAll(){//function getAll
		$this->db->select('*');//select semua data
		$this->db->from('user');//dari table user
		$this->db->join('grup', 'user.grup = grup.id_grup');//gabungkan table grup dan user menggunakan id_grup
		$query = $this->db->get();
		return $query;//lakukan query db
	}
		//function input data
	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}
		//function edit data
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
		//function update data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
		//function hapus data
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
		//function login
	function login($user,$pass,$table){
		$this->db->select ('*');
		$this->db->from   ('user');
		$this->db->where  ('username',$user);
		$this->db->where  ('password',$pass);
		$query = $this->db->get();
		return $query;
	}
}
?>