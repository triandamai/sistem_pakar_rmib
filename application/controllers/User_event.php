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
							'<div class="alert alert-warning" role="alert">
								Akun kamu belum aktif!
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
						'<div class="alert alert-danger" role="alert">
						Akun tidak ditemukan!
						</div>'
					);
					redirect("User_view/login");
				}
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-primary" role="alert">
					Akun tidak ada!
					</div>'
				);
				redirect("User_view/login");
			}
		}else {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-primary" role="alert">
					Kesalahan server, coba lagi nanti
				</div>'
			);
			redirect("User_view/login");
		}
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
					$$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-primary" role="alert">
						This is a primary alert—check it out!
						</div>'
					);
					redirect('User_view/daftar');
				} else if ($cek->email == $email) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-primary" role="alert">
						This is a primary alert—check it out!
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
							'<div class="alert alert-primary" role="alert">
							This is a primary alert—check it out!
							</div>'
						);
						redirect('User_view/login');
						//echo $this->session->flashdata('pesan');
					} else {
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-primary" role="alert">
							This is a primary alert—check it out!
							</div>'
						);
						redirect('User_view/daftar');
					}
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-primary" role="alert">
						This is a primary alert—check it out!
						</div>'
					);
					redirect('User_view/daftar');
				}
			}
			}

			
		}
	}
	public function simpan_analisa()
	{

		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jk');
		$ttl = $this->input->post('ttl');
        $id_user = $this->session->userdata['user_data']['id'];
		
		$tabel = $this->input->post('tabel');
		$val_1 = $this->input->post('val_1');
		$val_2 = $this->input->post('val_2');
		$val_3 = $this->input->post('val_3');
		$val_4 = $this->input->post('val_4');
		$val_5 = $this->input->post('val_5');
		$val_6 = $this->input->post('val_6');
		$val_7 = $this->input->post('val_7');
		$val_8 = $this->input->post('val_8');
		$val_9 = $this->input->post('val_9');
		$val_10 = $this->input->post('val_10');
		$val_11 = $this->input->post('val_11');
		$val_12 = $this->input->post('val_12');

		$simpan = $this->DataModel->insert();

		if($tabel == null || $tabel == "" || empty($tabel)){
		            //ini view idikator pertama
					$kode = "";
					$query = $this->db->get('hasil_analisa');
					$urutan_surat = $query->num_rows();
					if($urutan_surat == 0){
						$urut_surat = 1;
					}else {
						$urut_surat = $urutan_surat+1;
					}
					$kode = sprintf("%03d", $urut_surat);
			
					$data_session_analisa = array(
						"id_analisa" => "ANALISA_".$kode,
						"id_user" => $id_user,
						"ttl" => $ttl,
						"nama" => $nama,
						"jenis_kelamin" => $jenis_kelamin,
						"created_at" => date("Y-m-d H:i:s"),
						"updated_at" => date("Y-m-d H:i:s")
					);
					$simpan = $this->DataModel->insert("hasil_analisa");
					if($simpan){
						//ke table Awal
					   
						$whereArr = array(
							'tabel' => "A",
							'jk'=> $jenis_kelamin
						);
						$this->session->set_userdata('diagnosa_data',$data_arr);
					}
		}

		if($tabel == "A"){
			if($tabel == "A"){
				//ke tabel B
			}else if($tabel == "B"){
				//ke tabel C
				redirect();
			}else if($tabel == "C"){
				//ke tabel D
				redirect();
			}else if($tabel == "D"){
				//ke tabel E
				redirect();
			}else if($tabel == "E"){
				//ke tabel F
				redirect();
			}else if($tabel == "F"){
				//ke tabel G
				redirect();
			}else if($tabel == "G"){
				//ke tabel H
				redirect();
			}else if($tabel == "H"){
				//ke tabel I
				redirect();
			}else if($tabel == "I"){
				//ke tabel Akhir
				redirect();
			}else{
				//ke tabel tidak ada
				redirect();
			}
		}else{
			//kembali ke state ini lagi
			//redirect ke tabel $tabel

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
