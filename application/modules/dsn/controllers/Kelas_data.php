<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_data extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model("kelas_model");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		}
	public function index()
				{
				$data["view_detailkelas"] = $this->kelas_model->getData();
				$this->load->view('kelas_view',$data);
				}
	

		
}