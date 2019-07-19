<?php 
	class Kelas extends CI_Model{
		private $_table = "kelas";

	    public $ids;
	    public $kodegrup;
	    public $nama_kelas;


	     public function getAll()
	    {
	        return $this->db->get($this->_table)->result();
	    }
	    
	    public function getById($id)
	    {
	        return $this->db->get_where($this->_table, ["ids" => $id])->row();
	    }
}