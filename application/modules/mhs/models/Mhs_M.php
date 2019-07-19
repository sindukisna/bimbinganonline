<?php 
	class Mhs_M extends CI_Model{
		public function get_member_by_id($id){
			return $this->db->get_where('kelas_det', array('kodegrup' => $id))->row();
		}

		public function register($data_insert){
			$this->db->insert('kelas_det', $data_insert);
		}
	}