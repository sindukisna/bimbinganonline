<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dsn extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model("dosen_m");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		}
	public function index()
			{
				$this->load->view('dsn');
			}
			public function submit_kelas()
			{
				if (!$this->session->userdata('member_ids')){
				$this->form_validation->set_rules('kodegrup', 'kodegrup', 'required');
				$this->form_validation->set_rules('periode', 'periode', 'required');
				$this->form_validation->set_rules('kategori', 'kategori', 'required');



				//proses register
					$data_member = array(
							'nip' =>$this->input->post('nip'),
							'kodegrup' =>$this->input->post('kodegrup'),
							'nama_kelas' =>$this->input->post('nama_kelas'),
							'periode' =>$this->input->post('periode'),
							'kategori' =>$this->input->post('kategori')
							
						);
					$this->dosen_m->register($data_member);

					
				} else {
					echo "string";
				}
				redirect('dsn');
			}

		
}