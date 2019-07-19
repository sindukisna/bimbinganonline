<?php 
	class Isi_m extends CI_Model{
		private $_table = "isi";

	    public $isi_id;
	    public $id_sub;
	    public $konten;
	    
	    
	    
	    

	    public function rules()
    {
        return [
            

            ['field' => 'konten',
            'label' => 'konten',
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
		
		public function save()
		    {
		        $post = $this->input->post();
		        $this->isi_id = uniqid();
		        $this->id_sub = $post["id_sub"];
		        $this->konten = $post["konten"];
		        $this->db->insert($this->_table, $this);
		    }
		   
}