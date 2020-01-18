<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_event extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
		$this->load->library('bcrypt');
		$this->load->library('form_validation');
	}

	public function index()
	{

		
	}
	public function login()
	{
		if ($this->input->post('username')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->DataModel->getWhere('username', $username);
			$cek = $this->DataModel->getData('user')->row();

			if ($cek != null) {
				if($this->bcrypt->check_password($password,$cek->password)){
				// if ($cek->password == $password) {
					$datas = array(
						"updated_at" => date("Y-m-d H:i:s")
					);

					$this->DataModel->update('id', $cek->id, 'user', $datas);

					$user = array(
						"id" => $cek->id,
						"nama" => $cek->nama,
						"username" => $cek->username,
						"email" => $cek->email,
						"status" => $cek->status,
						"login" => true
					);
					if($cek->status == "TIDAK AKTIF"){
						$this->session->set_flashdata(
							'pesan',
							'<div class="row purchace-popup">
							<div class="col-12 stretch-card grid-margin">
							  <div class="card card-secondary">
								<span class="card-body d-lg-flex align-items-center">
								  <p class="mb-lg-0">Akun anda belum aktif</p>
								</span>
							  </div>
							</div>
						  </div>'
						);
						redirect("User_view/login");
					}else{
						$this->session->set_userdata('user_data', $user);
						redirect("User_view");
					}
					
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="row purchace-popup">
						<div class="col-12 stretch-card grid-margin">
						  <div class="card card-secondary">
							<span class="card-body d-lg-flex align-items-center">
							  <p class="mb-lg-0">Username atau password salah.</p>
							</span>
						  </div>
						</div>
					  </div>'
					);
					redirect("User_view/login");
				}
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="row purchace-popup">
					<div class="col-12 stretch-card grid-margin">
					  <div class="card card-secondary">
						<span class="card-body d-lg-flex align-items-center">
						  <p class="mb-lg-0">Akses tidak ada.</p>
						</span>
					  </div>
					</div>
				  </div>'
				);
				redirect("User_view/login");
			}
		} 
		// else {
		// 	$this->session->set_flashdata(
		// 		'login-error',
		// 		'<div class="alert alert-danger mr-auto">Server Error Coba Lagi</div>'
		// 	);
		// 	redirect("user_view/user_login");
		// }
	}
    public function simpan_analisa()
	{

		
	}
	public function user_register()
	{
		if ($this->input->post('simpan')) {
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$cpassword = $this->input->post('password-confirm');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata(
					'pesan',
					'<div class="row purchace-popup">
					<div class="col-12 stretch-card grid-margin">
					  <div class="card card-secondary">
						<span class="card-body d-lg-flex align-items-center">
						  <p class="mb-lg-0">Password Harus lebih dari 8 karakter.</p>
						  <button class="close popup-dismiss ml-2">
							<span aria-hidden="true">&times;</span>
						  </button>
						</span>
					  </div>
					</div>
				  </div>'
				);
				redirect('User_view/daftar');
			}else{
			$cek = $this->DataModel->select(array("username", "email"));
			$cek = $this->DataModel->get_whereArr("user", "username = '" . $username . "' or email = '" . $email . "'")->row();
			if ($cek != null) {
				if ($cek->username == $username) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="row purchace-popup">
						<div class="col-12 stretch-card grid-margin">
						  <div class="card card-secondary">
							<span class="card-body d-lg-flex align-items-center">
							  <p class="mb-lg-0">Username sudah terpakai.</p>
							</span>
						  </div>
						</div>
					  </div>'
					);
					redirect('User_view/daftar');
				} else if ($cek->email == $email) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="row purchace-popup">
						<div class="col-12 stretch-card grid-margin">
						  <div class="card card-secondary">
							<span class="card-body d-lg-flex align-items-center">
							  <p class="mb-lg-0">Email yang anda masukkan sudah terpakai.</p>
							</span>
						  </div>
						</div>
					  </div>'
					);
					redirect('User_view/daftar');
				}
			} else {
				if ($password == $cpassword) {
					$data = array(
						"nama"	=> $nama,
						"username" => $username,
						"email"    => $email,
						"password" => $this->bcrypt->hash_password($password),
						"status"	=> "TIDAK AKTIF",
						"created_at" => date("Y-m-d H:i:s")
					);

					$register = $this->DataModel->set_data('id', 'UUID()');
					$register = $this->DataModel->insert('user', $data);

					if ($register) {
						$this->session->set_flashdata(
							'pesan',
							'<div class="row purchace-popup">
							<div class="col-12 stretch-card grid-margin">
							  <div class="card card-secondary">
								<span class="card-body d-lg-flex align-items-center">
								  <p class="mb-lg-0">Silahkan masuk.</p>
								</span>
							  </div>
							</div>
						  </div>'
						);
						redirect('User_view/login');
						//echo $this->session->flashdata('pesan');
					} else {
						$this->session->set_flashdata(
							'pesan',
							'<div class="row purchace-popup">
							<div class="col-12 stretch-card grid-margin">
							  <div class="card card-secondary">
								<span class="card-body d-lg-flex align-items-center">
								  <p class="mb-lg-0">Gagal mendaftar.</p>
								</span>
							  </div>
							</div>
						  </div>'
						);
						redirect('User_view/daftar');
					}
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="row purchace-popup">
						<div class="col-12 stretch-card grid-margin">
						  <div class="card card-secondary">
							<span class="card-body d-lg-flex align-items-center">
							  <p class="mb-lg-0">Password tidak sama.</p>
							</span>
						  </div>
						</div>
					  </div>'
					);
					redirect('User_view/daftar');
				}
			}
			}

			
		}
	}
	function logout()
	{
		$sess_array = array(
			'email' => '',
		);
		$this->session->unset_userdata('user_data', $sess_array);
		redirect('/User_view/login', 'refresh');
		exit();
	}

    
}
