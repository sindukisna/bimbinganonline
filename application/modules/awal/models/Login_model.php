<?php
class Login_model extends CI_Model{
	//cek nip dan password dosen
	function auth_dosen($username,$password){
		$query=$this->db->query("SELECT * FROM member_dosen WHERE nip='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_mahasiswa($username,$password){
		$query=$this->db->query("SELECT * FROM member WHERE nim='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}
