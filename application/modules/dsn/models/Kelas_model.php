<?php 
	class Kelas_model extends CI_Model{
		 // private $_table = "view_detailkelas";

	 //    public $kodegrup;
	 //    public $nim;
	 //    public $nama;
	 //    public $kategori;
	 //    public $periode;


	    //  public function getAll()
	    // {
	    //     return $this->db->get($this->_table)->result();
	    // }
	    
	    public function getData($id = null)
	    {
	        // return $this->db->get_where($this->_table, ["kodegrup" => $id])->row();
	        if ($id) {
	        $sql = "SELECT kodegrup,nim,nama,kategori,periode FROM kelas k, member m, kelas_det kd WHERE k.kodegrup=kd.kodegrup and kd.nim=m.nim";
	        $query= $this->db->query($sql,array($id));
	        return $query->row_array();	
	        }

	    }

}

// member m, kelas k, kelas detail kd 
// where k.kodegrup=kd.kodegrup and kd.nim=m.nim