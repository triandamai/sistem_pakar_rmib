<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_event extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
		$this->load->library('bcrypt');
		$this->load->library('form_validation');
	}

	public function index()
	{
		redirect("Admin_view");
		
    }
    public function login()
	{
		
		if ($this->input->post('username')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->DataModel->getWhere('username', $username);
			$cek = $this->DataModel->getData('admin')->row();

			if ($cek != null) {
				if($this->bcrypt->check_password($password,$cek->password)){
			
					$datas = array(
						"updated_at" => date("Y-m-d H:i:s")
					);

					$this->DataModel->update('id', $cek->id, 'user', $datas);
					if ($cek->password == $password) {
						$datas = array(
							"updated_at" => date("Y-m-d H:i:s")
						);
	
						$this->DataModel->update('id_admin', $cek->id_admin, 'admin', $datas);
	
						$user = array(
							"id" => $cek->id_admin,
							"username" => $cek->username,
							"email" => $cek->email,
							"status" => true,
						);
						$this->session->set_userdata('admin_data', $user);
						$this->session->set_userdata('file_manager',true);
	
					//	die(json_encode($user));
						//kie bar di redirect maring view apa pwe?
						//aku bingung hehe
						redirect('admin_view');
		
					
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-success mr-auto">Username atau Password tidak ada</div>'
					);
					redirect("Admin_view/login");
				}
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success mr-auto">Akun tidak ditemukan!</div>'
				);
				redirect("Admin_view/login");
			}
		}else {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger mr-auto">Kesalahan server</div>'
			);
			redirect("Admin_view/login");
			}
		}
	}
    public function tambah_indikator()
	{
		$nama = $this->input->post("nama");
		$urut = $this->input->post("urut");

		
		$cek = $this->DataModel->getWhere("no_urut",$urut);
		$cek = $this->DataModel->getData("indikator")->row();

			if ($cek == null) {

				$kode = "";
				$query = $this->db->get('indikator');
				$urutan_surat = $query->num_rows();
				
				if($urutan_surat == 0){
					$urut_surat = 1;
				}else {
					$urut_surat = $urutan_surat+1;
				}
				$kode = sprintf("%03d", $urut_surat);
				$data = array(
					"id"=> "I".$kode,
					"nama" => $nama,
					"no_urut" => $urut,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$simpan = $this->DataModel->insert("indikator",$data);
					if($simpan){
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Berhasil</div>'
						);
						redirect('admin_view/data_indikator');
					}else{
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Gagal</div>'
						);
						redirect('admin_view/data_indikator');
					}
			}else{
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger mr-auto">No urut sudah ada</div>'
				);
				redirect('admin_view/data_indikator');
			}
		
	}
	public function ubah_indikator()
	{
		$nama = $this->input->post("nama");
		$urut = $this->input->post("urut");
		$id = $this->input->post("id");


				$data = array(
					"nama" => $nama,
					"no_urut" => $urut,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				//die(json_encode($id));
				$simpan = $this->DataModel->update("id",$id,"indikator",$data);
					if($simpan){
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Berhasil</div>'
						);
						redirect('admin_view/data_indikator');
					}else{
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Gagal</div>'
						);
						redirect('admin_view/data_indikator');
					}

		
	}
	public function hapus_indikator()
	{
		$id = $this->input->post('id');
		$simpan = $this->DataModel->delete("id",$id,"indikator");
					if($simpan){
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Berhasil</div>'
						);
						redirect('admin_view/data_indikator');
					}else{
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Gagal</div>'
						);
						redirect('admin_view/data_indikator');
					}

		
    }
	public function tambah_sub_indikator()
	{
		$id_indikator = $this->input->post("id_indikator");
		$nama = $this->input->post("nama");
		$tabel = $this->input->post("tabel");
		$jk = $this->input->post("jenis_kelamin");
		$urut = $this->input->post("urut");

		$where_arr = array(
			"tabel" => $tabel,
			"no_urut"=> $urut
		);
		$cek = $this->DataModel->get_whereArr('sub_indikator', $where_arr)->row();

			if ($cek == null) {

				$kode = "";
				$query = $this->db->get('sub_indikator');
				$urutan_surat = $query->num_rows();
				
				if($urutan_surat == 0){
					$urut_surat = 1;
				}else {
					$urut_surat = $urutan_surat+1;
				}
				$kode = sprintf("%03d", $urut_surat);
				$data = array(
					"id"=> "SUB_".$kode,
					"id_indikator" => $id_indikator,
					"nama" => $nama,
					"tabel"=> $tabel,
					"jk"=> $jk,
					"no_urut" => $urut,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$simpan = $this->DataModel->insert("sub_indikator",$data);
					if($simpan){
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Berhasil</div>'
						);
						redirect('admin_view/data_indikator');
					}else{
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Gagal</div>'
						);
						redirect('admin_view/data_indikator');
					}
			}else{
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger mr-auto">No urut sudah ada</div>'
				);
				redirect('admin_view/data_indikator');
			}
		
	}
	public function ubah_sub_indikator()
	{
		$id= $this->input->post("id");
		$nama = $this->input->post("nama");
		$tabel = $this->input->post("tabel");
		$jk = $this->input->post("jenis_kelamin");
		$urut = $this->input->post("urut");
		$id_indikator = $this->input->post("indikator");

				$data = array(
					"id_indikator" => $id_indikator,
					"nama" => $nama,
					"tabel"=> $tabel,
					"jk"=> $jk,
					"no_urut" => $urut,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$simpan = $this->DataModel->update("id",$id,"sub_indikator",$data);
					if($simpan){
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Berhasil</div>'
						);
						redirect('admin_view/data_indikator');
					}else{
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Gagal</div>'
						);
						redirect('admin_view/data_indikator');
					}
			
		
	}
	public function hapus_sub_indikator()
	{
		$id = $this->input->post('id');
		$simpan = $this->DataModel->delete("id",$id,"sub_indikator");
					if($simpan){
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-success mr-auto">Berhasil</div>'
						);
						redirect('admin_view/data_indikator');
					}else{
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger mr-auto">Gagal</div>'
						);
						redirect('admin_view/data_indikator');
					}

		
	}

	public function ubah_status_user()
	{
		$status = $this->input->post("status");
		$id = $this->input->post("id_user");
	//	die(json_encode($id));
		$data = array(
			"status" => $status,
		);
		$ubah = $this->DataModel->update("id",$id,"user",$data);
			if($ubah){
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success mr-auto">Berhasil</div>'
				);
				redirect('admin_view/data_user');
			}else{
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger mr-auto">Gagal</div>'
				);
				redirect('admin_view/data_user');
			}
		
		
    }


    
}
