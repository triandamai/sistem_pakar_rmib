<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
		$this->load->library('bcrypt');
	}

	public function index()
	{
            $data['judul'] = "Admin | Masuk";
            $this->load->view('header', $data);
            $this->load->view('Admin/nav-top', $data);
                $this->load->view('Admin/home', $data);
            $this->load->view('Admin/nav-bottom', $data);
            $this->load->view('footer', $data);
		
    }
    public function login()
	{
            $data['judul'] = "Admin | Masuk";
            $this->load->view('header', $data);
                $this->load->view('Admin/auth-login', $data);
            $this->load->view('footer', $data);
    }
    public function data_indikator()
	{
            $data['judul'] = "Admin | Masuk";
            $this->load->view('header', $data);
            $this->load->view('Admin/nav-top', $data);
                $this->load->view('Admin/data-indikator', $data);
            $this->load->view('Admin/nav-bottom', $data);
            $this->load->view('footer', $data);
		
    }
    public function data_user()
	{
            $data['judul'] = "Admin | Masuk";
            $this->load->view('header', $data);
            $this->load->view('Admin/nav-top', $data);
                $this->load->view('Admin/data-user', $data);
            $this->load->view('Admin/nav-bottom', $data);
            $this->load->view('footer', $data);
		
    }
    public function data_analisa()
	{
            $data['judul'] = "Admin | Masuk";
            $this->load->view('header', $data);
            $this->load->view('Admin/nav-top', $data);
                $this->load->view('Admin/data-analisa', $data);
            $this->load->view('Admin/nav-bottom', $data);
            $this->load->view('footer', $data);
		
	}
    
}
