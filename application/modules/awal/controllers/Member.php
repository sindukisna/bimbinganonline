<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	
	 public function __construct(){
			parent::__construct();
			$this->load->model("siswa_m");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		} 	

		public function index(){
		$data["member"] = $this->siswa_m->get_member_by_id($this->session->userdata('member_idm'));
		$this->load->view('member', $data);
		}

		public function login(){
			if ($_POST) {
			//tampung data dari form
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				//mendapatkan data member berdasarkan username
				$member = $this->siswa_m->get_member_by_username($username);

				//pengecekan password daei form dan database
				if(password_verify($password, $member->password)){
					$this->session->set_userdata(array(
						'member_idm'		=>$member->member_idm,
						'member_name'	=>$member->member_name,
						'member_logged_in' => TRUE //untuk mengecek status login atau tidak
					));
				}else {
					die('LOGIN FAILED'); //jika login gagal
				}
			}
		}

		public function member_login(){
			$this->login();
			redirect('mhs'); // jika login success
		}

		public function register_siwa(){
			$this->load->view('register_siwa');
		}

		public function submit_register(){
			// validation form
			if (!$this->session->userdata('member_idm')){
				$this->form_validation->set_rules('nim', 'Nim', 'required');
				$this->form_validation->set_rules('member_name', 'Nama Lengkap', 'required');	
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');	
				$this->form_validation->set_rules('telp', 'Nomor telepon', 'required|numeric');	
				$this->form_validation->set_rules('address', 'Alamat Pengiriman', 'required');	
				$this->form_validation->set_rules('username', 'Username', 'required');	
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[retype_password]');	
				$this->form_validation->set_rules('retype_password', 'Retype Password', 'required|min_length[5]|matches[password]');	
 
				if($this->form_validation->run()==FALSE){
					$this->session->set_flashdata('failed', validation_errors('<div class="alert alert-danger">','</div>'));
					redirect('awal/index');				
				} else {
 
 
			// proses upload gmabar
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
			 if ( ! $this->upload->do_upload('photo')) //sesuai dengan name pada form 
		            {
		                   echo 'anda gagal upload';
		            }
	                $file = $this->upload->data();	
        			$gambar = $file['file_name'];
 
 
					//proses register
					$data_member = array(
							'nim' =>$this->input->post('nim'),
							'member_name' =>$this->input->post('member_name'),
							'email' =>$this->input->post('email'),
							'telp' =>$this->input->post('telp'),
							'image' =>$gambar,
							'address' =>$this->input->post('address'),
							'username' =>$this->input->post('username'),
							// 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
							'password' => md5($this->input->post('password'))
						);
					$this->siswa_m->register($data_member);
 
					//proses login
					$member=$this->siswa_m->get_member_by_username($this->input->post('username'));
					$this->session->set_userdata(array(
						'member_idm' => $member->idm,
						'member_name' => $member->name,
						'member_email' => $member->email,
						'member_logged_in' => TRUE
					));
				}
			}
 
			redirect('awal');
		}
		

		public function logout(){
			$this->session->unset_userdata(array(
				'member_idm',
				'member_name',
				'member_logged_in'
			));
		}
		
public function member_logout(){
			$this->logout();
			redirect('awal');
		}

		
}