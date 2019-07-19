<?php 
	class Kerangka_model extends CI_Model{
		private $_table = "kerangkas";

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
			        return $this->db->get_where($this->_table, ["idb" => $id])->row();
			    }
	    

		public function save()
		    {
		        $post = $this->input->post();
		        $this->idb = uniqid();
		        $this->id_sub = $post["id_sub"];
		        $this->judul_subab = $post["judul_subab"];
		        $this->db->insert($this->_table, $this);
		    }

		    public function update()
		    {
		        $post = $this->input->post();
		        $this->idb = $post["id"];
		        $this->id_sub = $post["id_sub"];
		        $this->judul_subab = $post["judul_subab"];
		        
		        $this->db->update($this->_table, $this, array('idb' => $post['id']));
		    }


		     public function delete($id)
			    {
			        return $this->db->delete($this->_table, array("idb" => $id));
			    }
}