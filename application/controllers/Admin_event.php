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

		
    }
    public function login()
	{

		
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
    public function ubah_indikator()
	{

		
    }
    public function tambah_user()
	{

		
    }
    public function aktifkan_user()
	{

		
    }
    
}
