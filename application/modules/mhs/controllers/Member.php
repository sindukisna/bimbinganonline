<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {
	
	 public function __construct(){
			parent::__construct();
		} 	

		public function index()
		{
			$this->load->view('member');
		}
		public function member()
		{
			$this->load->view('member');
		}
}