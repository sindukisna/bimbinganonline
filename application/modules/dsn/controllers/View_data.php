<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_data extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model("kelas");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		}
	public function index()
				{
				$data["kelas"] = $this->kelas->getAll();
				$this->load->view('data_view',$data);
				}
	public function data_view()
		{
			$data["kelas"] = $this->kelas->getAll();
			$this->load->view('data_view',$data);
		}	

		
}