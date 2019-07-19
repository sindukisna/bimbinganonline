<?php 
	class Isi_model extends CI_Model{
		private $_table = "kerangkas";

	    public $isi_id;
	    public $nim;
	    public $konten;
	    public $koreksi;
	    public $idb;
	    public $id_sub;
	    public $judul_subab;

	    public function rules()
    {
        return [
            ['field' => 'id_sub',
            'label' => 'Bab',
            'rules' => 'required'],

            ['field' => 'judul_subab',
            'label' => 'Sub Bab',
            'rules' => 'required']
            
        ];
    }


	     public function getAll()
	    {
	        return $this->db->get($this->_table)->result();
	    }

	    public function getById($id)
			    {
			        return $this->db->get_where($this->_table, ["isi_id" => $id])->row();
			    }
		

		   
}