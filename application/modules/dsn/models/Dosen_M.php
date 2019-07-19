<?php 
	class Dosen_M extends CI_Model{
		public function get_member_by_id($id){
			return $this->db->get_where('kelas', array('ids' => $id))->row();
		}

		public function register($data_insert){
			$this->db->insert('kelas', $data_insert);
		}
	}