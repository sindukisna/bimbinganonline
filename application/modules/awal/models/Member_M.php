<?php 
	class Member_M extends CI_Model{
		public function get_member_by_username($username){
			return $this->db->get_where('member', array('username' => $username))->row();
		}
		public function get_member_by_id($id){
			return $this->db->get_where('member_dosen', array('id' => $id))->row();
		}

		public function register($data_insert){
			$this->db->insert('member_dosen', $data_insert);
		}
	}