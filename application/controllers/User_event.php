<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_event extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
		$this->load->library('bcrypt');
	}

	public function index()
	{

		
    }
    public function simpan_analisa()
	{

		
	}
	public function user_register()
	{
		if ($this->input->post('simpan')) {
			$username = $this->input->post('nama');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$cpassword = $this->input->post('password-confirm');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger mr-auto">Password minimal 8 Karakter.</div>'
				);
				redirect('user_view/user_register');
			}else{
			$cek = $this->DataModel->select(array("username", "email"));
			$cek = $this->DataModel->get_whereArr("user", "username = '" . $username . "' or email = '" . $email . "'")->row();
			if ($cek != null) {
				if ($cek->username == $username) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger mr-auto">Username yang anda masukkan sudah ada.</div>'   //tambaih dimissable yan
					);
					redirect('user_view/user_register');
				} else if ($cek->email == $email) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger mr-auto">Email yang anda masukkan sudah ada.</div>'
					);
					redirect('user_view/user_register');
				}
			} else {
				if ($password == $cpassword) {
					$data = array(
						"username" => $username,
						"email"    => $email,
						"password" => $this->bcrypt->hash_password($password),
						"created_at" => date("Y-m-d H:i:s")
					);

					$register = $this->DataModel->set_data('id_user', 'UUID()');
					$register = $this->DataModel->insert('user', $data);

					if ($register) {
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Akun berhasil dibuat, anda dapat melanjutkan untuk login</div>'
						);
						redirect('user_view/user_login');
						//echo $this->session->flashdata('pesan');
					} else {
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Ada Kesalahan server.</div>'
						);
						redirect('user_view/user_register');
					}
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger mr-auto">Password yang anda masukkan tidak sama.</div>'
					);
					redirect('user_view/user_register');
				}
			}
			}

			
		}
	}

    
}
