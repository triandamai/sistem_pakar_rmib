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
            $data['indikator'] = $this->DataModel->getData("indikator")->result();
           // die(json_encode($data));
            $this->load->view('header', $data);
            $this->load->view('Admin/nav-top', $data);
                $this->load->view('Admin/data-indikator', $data);
            $this->load->view('Admin/nav-bottom', $data);
            $this->load->view('footer', $data);
		
    }
    public function data_user()
	{
            $data['judul'] = "Admin | Masuk";
            $data['user'] = $this->DataModel->getData("user")->result_array();
          // die(json_encode($data));
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
    function isLoggedIn()
    {
        if ($this->session->userdata('admin_data') != null) {
            return $this->session->userdata['admin_data']['login'];
        } else {
            return false;
        }
    }
    
}
