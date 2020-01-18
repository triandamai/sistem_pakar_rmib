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
                $this->load->view('user/data-analisa', $data);
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
