<?php 
	class Kode_M extends CI_Model{
		private $_table = "kelas_det";

	    public $kodegrup;

	     public function getAll()
	    {
	        return $this->db->get($this->_table)->result();
	    }
	    
	    public function getById($id)
	    {
	        return $this->db->get_where($this->_table, ["kodegrup" => $id])->row();
	    }
	}