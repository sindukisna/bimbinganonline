<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model("mhs_m");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		}
	
		public function index()
		{
			$this->load->view('mhs');
		}
		public function bmb()
		{
			$this->load->view('bmb');
		}

			public function join_kelas()
			{
				if (!$this->session->userdata('member_id')){
				$this->form_validation->set_rules('kodegrup', 'kodegrup', 'required');



				//proses register
					$data_member = array(
							'nim' =>$this->input->post('nim'),
							'kodegrup' =>$this->input->post('kodegrup'),
							
						);
					$this->mhs_m->register($data_member);

					
				} else {
					echo "string";
				}
				redirect('mhs');
			}



}