<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isi extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model("kerangka_model");
			$this->load->model("isi_m");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		}
	public function index() {
			$data["kerangkas"] = $this->kerangka_model->getAll();
			$this->load->view('isi/isi_tambah',$data);
	}
			 


	 public function add()
		    	{
		        $product = $this->isi_m;
		        $validation = $this->form_validation;
		        $validation->set_rules($product->rules());

		        if ($validation->run()) {
		            $product->save();
		            $this->session->set_flashdata('success', 'Berhasil disimpan');
		        }

		        $this->load->view("isi/isi_tambah");
		   		 }
		
}