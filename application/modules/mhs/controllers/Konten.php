<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model("kode_m");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		}
	public function index()
				{
				$data["kelas_det"] = $this->kode_m->getAll();
				$this->load->view('kode_view',$data);
				}
	

		
}