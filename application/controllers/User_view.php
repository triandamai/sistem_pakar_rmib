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
    public function hasil_analisa()
	{
        $whereA = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "A"
		);
		$whereB = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "B"
		);
		$whereC = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "C"
		);
		$whereD = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "D"
		);
		$whereE = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "E"
		);
		$whereF = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "F"
		);
		$whereG = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "G"
		);
		$whereH = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "H"
		);
		$whereI = array(
			'id_user' => $this->session->userdata['user_data']['id'],
			'id_hasil' => $this->session->userdata['analisa_data']['id'],
			'tabel' => "I"
		);
		$data['detail_A'] = $this->DataModel->get_whereArr('detail_analisa',$whereA)->result();
		$data['detail_B'] = $this->DataModel->get_whereArr('detail_analisa',$whereB)->result();
		$data['detail_C'] = $this->DataModel->get_whereArr('detail_analisa',$whereC)->result();
		$data['detail_D'] = $this->DataModel->get_whereArr('detail_analisa',$whereD)->result();
		$data['detail_E'] = $this->DataModel->get_whereArr('detail_analisa',$whereE)->result();
		$data['detail_F'] = $this->DataModel->get_whereArr('detail_analisa',$whereF)->result();
		$data['detail_G'] = $this->DataModel->get_whereArr('detail_analisa',$whereG)->result();
		$data['detail_H'] = $this->DataModel->get_whereArr('detail_analisa',$whereH)->result();
		$data['detail_I'] = $this->DataModel->get_whereArr('detail_analisa',$whereI)->result();
        //die(json_encode($data));
     $this->load->view('hasil_analisa',$data);
    }
    public function mulai_analisa()
	{

        if ($this->isLoggedIn()) {
            $id_user = $this->session->userdata['user_data']['id'];
            $state_tabel = $this->input->get('tabel');
            if($state_tabel == null || $state_tabel == "" || empty($state_tabel)){

                $whereArr = array(
                    'tabel'=> "A",
                    'jk' => $this->session->userdata['analisa_data']['jenis_kelamin']
                );
                $data['judul'] = "User | Home";
                $data['nama_section'] = "Home";
                $data['title_section'] = "Selamat Datang!";
                $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
                $data['sub_indikator'] = $this->DataModel->get_whereArr_sub('sub_indikator',$whereArr)->result();
               
                //die(json_encode($data));
                //die(json_encode($whereArr));

                $this->load->view('header', $data);
                $this->load->view('user/nav-top', $data);
                $this->load->view('user/mulai-analisa', $data);
                $this->load->view('user/nav-bottom', $data);
                $this->load->view('footer', $data);
                
            }else{
                 //ambil tabel selanjutnya sesuai param
                 $whereArr = array(
                    'tabel' => $state_tabel,
                    'jk' => $this->session->userdata['analisa_data']['jenis_kelamin']
                );

                $data['judul'] = "User | Home";
                $data['nama_section'] = "Home";
                $data['title_section'] = "Selamat Datang!";
                $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
                $data['sub_indikator'] = $this->DataModel->get_whereArr('sub_indikator',$whereArr)->result();
                //die(json_encode($data));
                $this->load->view('header', $data);
                $this->load->view('user/nav-top', $data);
                $this->load->view('user/mulai-analisa', $data);
                $this->load->view('user/nav-bottom', $data);
                $this->load->view('footer', $data);
            }

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
