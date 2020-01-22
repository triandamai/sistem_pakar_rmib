<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_view extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
		$this->load->library('bcrypt');
	}

	public function index()
	{
        if ($this->isLoggedIn()) {
            $data['judul'] = "User | Home";
            $data['nama_section'] = "Home";
            $data['title_section'] = "Selamat Datang!";
            $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
            $this->load->view('header', $data);
                $this->load->view('user/nav-top', $data);
                $this->load->view('user/home', $data);
                $this->load->view('user/nav-bottom', $data);
            $this->load->view('footer', $data);
        }else{
            redirect('user_view/login');
        }
		
    }
    public function login()
	{
            $data['judul'] = "User | Masuk";
            $this->load->view('header', $data);
                $this->load->view('User/auth-login', $data);
            $this->load->view('footer', $data);
		
    }
    public function daftar()
	{
            $data['judul'] = "User | Mendaftar";
            $this->load->view('header', $data);
                $this->load->view('User/auth-register', $data);
            $this->load->view('footer', $data);
		
    }
    public function isi_data_analisa()
	{
        if ($this->isLoggedIn()) {
            $data['judul'] = "User | Home";
            $data['nama_section'] = "Home";
            $data['title_section'] = "Selamat Datang!";
            $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
            $this->load->view('header', $data);
                $this->load->view('user/nav-top', $data);
                $this->load->view('user/isi-data-analisa', $data);
                $this->load->view('user/nav-bottom', $data);
            $this->load->view('footer', $data);
        }else{
            redirect('user_view/login');
        }
		
    }

    public function mulai_analisa()
	{
        $nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jk');
		$ttl = $this->input->post('ttl');
        $id_user = $this->session->userdata['user_data']['id'];
        
        $state_indikator = $this->input->get('state');
        if($state_indikator == null || $state_indikator == "" || isempty($state_indikator)){
            //ini view idikator pertma
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

            }else{

            }
          //  die(json_encode($data_session_analisa));
            
        }else{
            //jika ada get data indikator
            
        }


        if ($this->isLoggedIn()) {
            $data['judul'] = "User | Home";
            $data['nama_section'] = "Home";
            $data['title_section'] = "Selamat Datang!";
            $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
            $this->load->view('header', $data);
                $this->load->view('user/nav-top', $data);
                $this->load->view('user/mulai-analisa', $data);
                $this->load->view('user/nav-bottom', $data);
            $this->load->view('footer', $data);
        }else{
            redirect('user_view/login');
        }
		
    }
    public function data_history()
	{
        if ($this->isLoggedIn()) {
            $data['judul'] = "User | Home";
            $data['nama_section'] = "Home";
            $data['title_section'] = "Selamat Datang!";
            $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
            $this->load->view('header', $data);
                $this->load->view('user/nav-top', $data);
                $this->load->view('user/history-analisa', $data);
                $this->load->view('user/nav-bottom', $data);
            $this->load->view('footer', $data);
        }else{
            redirect('user_view/login');
        }
		
    }
    function isLoggedIn()
    {
        if ($this->session->userdata('user_data') != null) {
            return $this->session->userdata['user_data']['login'];
        } else {
            return false;
        }
    }
    
}
