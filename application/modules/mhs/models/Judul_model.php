<?php 
	class Judul_model extends CI_Model{
		private $_table = "bimbingan";

	    public $idbs;
	    public $judul_bab;

	    public function rules()
    {
        return [

            ['field' => 'judul_bab',
            'label' => 'Judul Bab',
            'rules' => 'required']
            
        ];
    }


	     public function getAll()
	    {
	        return $this->db->get($this->_table)->result();
	    }

	    public function getById($id)
			    {
			        return $this->db->get_where($this->_table, ["idbs" => $id])->row();
			    }
	    

		public function save()
		    {
		        $post = $this->input->post();
		        $this->idbs = uniqid();
		        $this->judul_bab = $post["judul_bab"];
		        $this->db->insert($this->_table, $this);
		    }

		    public function update()
		    {
		        $post = $this->input->post();
		        $this->idbs = $post["id"];
		        $this->judul_bab = $post["judul_bab"];
		        $this->db->update($this->_table, $this, array('idbs' => $post['id']));
		    }


		     public function delete($id)
			    {
			        return $this->db->delete($this->_table, array("idbs" => $id));
			    }
}