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
    
}
