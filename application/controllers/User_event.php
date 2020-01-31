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
		redirect('User_view');		
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
						"jk" => $cek->jk,
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
			$jk = $this->input->post('jk');
			$cpassword = $this->input->post('password-confirm');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			if($this->form_validation->run() == FALSE){
				$$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-warning" role="alert">
						Password minimal 8 karakter!
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
						'<div class="alert alert-danger" role="alert">
							Username tidak tersedia!
						</div>'
					);
					redirect('User_view/daftar');
				} else if ($cek->email == $email) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger" role="alert">
							Email sudah terpakai!
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
						"jk" => $jk,
						"status"	=> "TIDAK AKTIF",
						"created_at" => date("Y-m-d H:i:s")
					);

					$register = $this->DataModel->set_data('id', 'UUID()');
					$register = $this->DataModel->insert('user', $data);

					if ($register) {
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success" role="alert">
								Berhasil silahkan login
							</div>'
						);
						redirect('User_view/login');
						//echo $this->session->flashdata('pesan');
					} else {
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger" role="alert">
							Gagal mendaftar!
							</div>'
						);
						redirect('User_view/daftar');
					}
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger" role="alert">
							Password tidak sesuai!
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
		$tabel = $this->input->get('tabel');
		$id_user = $this->session->userdata['user_data']['id'];

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
						"id" => "ANALISA_".$kode,
						"id_user" => $id_user,
						"nama" => $this->session->userdata['user_data']['nama'],
						"jenis_kelamin" => $this->session->userdata['user_data']['jk'],
						"created_at" => date("Y-m-d H:i:s"),
						"updated_at" => date("Y-m-d H:i:s")
					);
					$simpan = $this->DataModel->insert("hasil_analisa",$data_session_analisa);
					if($simpan){
						//ke table Awal
						$this->session->set_userdata('analisa_data',$data_session_analisa);
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success" role="alert">
								Silahkan Isi data dibawah!
							</div>'
						);
						redirect('User_view/mulai_analisa?tabel=A');
					}else{
						//kembali ke isi biodata
						$this->session->unset_userdata['analisa_data'];
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger" role="alert">
								Gagal menyimpan data! Coba lagi
							</div>'
						);
						redirect('User_view/isi_data_analisa');
					}
		}else{
			$val = $this->input->post('val');
			$idsub = $this->input->post('id_sub');
			
			$data = array();
			$jumlah = array();

			$index= 0;
		
			foreach($val as $dataval){
				array_push($data,
					array(
						'id_user' => $id_user = $this->session->userdata['user_data']['id'],
						'id_hasil' => $this->session->userdata['analisa_data']['id'],	
						'id_sub' => $idsub[$index],
						'no_urut' => $index +1,
						'value' => $val[$index],
						'tabel' => $tabel,
						'created_at' => date("Y-m-d H:i:s"),
						'updated_at' => date("Y-m-d H:i:s"),
						
					)
				);
				array_push($jumlah,$val[$index]);
				$index++;
			}
			//die(json_encode(array_sum($jumlah)));
			if(array_sum($jumlah) !== 78){
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger" role="alert">
						Data yang diinputkan tidak valid! <br>
						Isilah dengan mengurutkan dari yang terkecil(1-12), setiap form tidak boleh memiliki jumlah yang sama!
					</div>'
				);
				redirect('User_view/mulai_analisa?tabel='.$tabel);
			}else{
				//die(json_encode($data));
			$simpan = $this->DataModel->insert_many('detail_analisa',$data);
			if($simpan){
				if($tabel == "A"){
					//ke tabel B
					redirect('User_view/mulai_analisa?tabel=B');
				}else if($tabel == "B"){
					//ke tabel C
					redirect('User_view/mulai_analisa?tabel=C');
				}else if($tabel == "C"){
					//ke tabel D
					redirect('User_view/mulai_analisa?tabel=D');
				}else if($tabel == "D"){
					//ke tabel E
					redirect('User_view/mulai_analisa?tabel=E');
				}else if($tabel == "E"){
					//ke tabel F
					redirect('User_view/mulai_analisa?tabel=F');
				}else if($tabel == "F"){
					//ke tabel G
					redirect('User_view/mulai_analisa?tabel=G');
				}else if($tabel == "G"){
					//ke tabel H
					redirect('User_view/mulai_analisa?tabel=H');
				}else if($tabel == "H"){
					//ke tabel I
					redirect('User_view/mulai_analisa?tabel=I');
				}else if($tabel == "I"){
					//ke tabel Akhir
					$update_hasil = $this->DataModel->update('id',$this->session->userdata['analisa_data']['id'],'hasil_analisa',array('hasil'=>'SELESAI')); 
					if($update_hasil){
						redirect('User_view/hasil_analisa?hasil='.$this->session->userdata['analisa_data']['id']);
					}else{
						redirect('User_view/hasil_analisa?hasil='.$this->session->userdata['analisa_data']['id']);
					}
				}else{
					//ke tabel tidak ada
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger" role="alert">
							Data tidak valid! Coba lagi
						</div>'
					);
					redirect('User_view/isi_data_analisa');
				}
			}else{
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger" role="alert">
						Gagal mentimpan data! Coba lagi
					</div>'
				);
				redirect('User_view/mulai_analisa?tabel='.$tabel);
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
