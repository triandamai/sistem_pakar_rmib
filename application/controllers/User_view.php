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
    public function cekjoin()
	{
        die(json_encode($this->DataModel->getJoin_hasil()->result()));    }
    public function hasil_analisa()
	{
        $get_idHasil = $this->input->get('hasil');
        if($get_idHasil == null || empty($get_idHasil)){
            $get_idHasil = $this->session->userdata['analisa_data']['id'];   
            $whereA = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "A"
            );
            $whereB = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "B"
            );
            $whereC = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "C"
            );
            $whereD = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "D"
            );
            $whereE = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "E"
            );
            $whereF = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "F"
            );
            $whereG = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "G"
            );
            $whereH = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "H"
            );
            $whereI = array(
                'id_user' => $this->session->userdata['user_data']['id'],
                'id_hasil' => $get_idHasil,
                'tabel' => "I"
            );
            
    
            $dataA = $this->DataModel->get_whereArr_sub('detail_analisa',$whereA);
            $dataB = $this->DataModel->get_whereArr_sub('detail_analisa',$whereB);
            $dataC = $this->DataModel->get_whereArr_sub('detail_analisa',$whereC);
            $dataD = $this->DataModel->get_whereArr_sub('detail_analisa',$whereD);
            $dataE = $this->DataModel->get_whereArr_sub('detail_analisa',$whereE);
            $dataF = $this->DataModel->get_whereArr_sub('detail_analisa',$whereF);
            $dataG = $this->DataModel->get_whereArr_sub('detail_analisa',$whereG);
            $dataH = $this->DataModel->get_whereArr_sub('detail_analisa',$whereH);
            $dataI = $this->DataModel->get_whereArr_sub('detail_analisa',$whereI);
 
            $data['hasil_analisa'] = $this->DataModel->getWheretbl('hasil_analisa','id',$get_idHasil)->row(); 
            $indikator = $this->DataModel->getData_indikator('indikator');
            $data['indikator'] = $indikator->result();
           // die(json_encode($data));
            
            $jml_ind = $indikator->num_rows();
    
            if($dataA->num_rows() == $jml_ind && 
                $dataB->num_rows() == $jml_ind && 
                $dataC->num_rows() == $jml_ind && 
                $dataD->num_rows() == $jml_ind && 
                $dataE->num_rows() == $jml_ind && 
                $dataF->num_rows() == $jml_ind && 
                $dataG->num_rows() == $jml_ind && 
                $dataH->num_rows() == $jml_ind && 
                $dataI->num_rows() == $jml_ind
                ){
            $tabelA = array();
            $tabelB = array();
            $tabelC = array();
            $tabelD = array();
            $tabelE = array();
            $tabelF = array();
            $tabelG = array();
            $tabelH = array();
            $tabelI = array();
            $jml = array();
    
            foreach($dataA->result() as  $d){
                array_push($tabelA,$d->value);
            }
            foreach($dataB->result() as  $d){
                array_push($tabelB,$d->value);
            }
            foreach($dataC->result() as  $d){
                array_push($tabelC,$d->value);
            }
            foreach($dataD->result() as  $d){
                array_push($tabelD,$d->value);
            }
            foreach($dataE->result() as  $d){
                array_push($tabelE,$d->value);
            }
            foreach($dataF->result() as  $d){
                array_push($tabelF,$d->value);
            }
            foreach($dataG->result() as  $d){
                array_push($tabelG,$d->value);
            }
            foreach($dataH->result() as  $d){
                array_push($tabelH,$d->value);
            }
            foreach($dataI->result() as  $d){
                array_push($tabelI,$d->value);
            }
    
            $data['tabel_A'] = $tabelA;
            $data['tabel_B'] = $tabelB;
            $data['tabel_C'] = $tabelC;
            $data['tabel_D'] = $tabelD;
            $data['tabel_E'] = $tabelE;
            $data['tabel_F'] = $tabelF;
            $data['tabel_G'] = $tabelG;
            $data['tabel_H'] = $tabelH;
            $data['tabel_I'] = $tabelI;
            $data['jmlA'] = array_sum($tabelA);
            $data['jmlB'] = array_sum($tabelB);
            $data['jmlC'] = array_sum($tabelC);
            $data['jmlD'] = array_sum($tabelD);
            $data['jmlE'] = array_sum($tabelE);
            $data['jmlF'] = array_sum($tabelF);
            $data['jmlG'] = array_sum($tabelG);
            $data['jmlH'] = array_sum($tabelH);
            $data['jmlI'] = array_sum($tabelI);
            $data['jmlALL'] = $data['jmlA'] + $data['jmlB'] + $data['jmlC'] + $data['jmlD'] + $data['jmlE'] + $data['jmlF'] + $data['jmlG'] + $data['jmlH'] + $data['jmlI'];
    
            for($i = 0 ; $i < 12 ; $i++){
                 array_push($jml, $tabelA[$i] + $tabelB[$i] + $tabelC[$i] + $tabelD[$i] + $tabelE[$i] + $tabelF[$i] + $tabelG[$i] + $tabelH[$i]+$tabelI[$i]);
            }
    
            $data['jml'] = $jml;
           // die(json_encode($data));
                    $data['judul'] = "User | Home";
                    $data['nama_section'] = "Home";
                    $data['title_section'] = "Selamat Datang!";
                    $data['subtitle_section'] = "Halaman utama user Sistem Pakar.";
                    $this->load->view('header', $data);
                    $this->load->view('user/nav-top', $data);
                    $this->load->view('hasil_analisa',$data);
                    $this->load->view('user/nav-bottom', $data);
                    $this->load->view('footer', $data);
        }else{
            //analisa tidak valid
            echo "tidak valid";
        }
        }else{
            //redirect tidak ada data
        }
        
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
                $data['sub_indikator'] = $this->DataModel->get_whereArr_sub('sub_indikator',$whereArr)->result();
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
