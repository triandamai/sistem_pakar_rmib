<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
		$this->load->library('bcrypt');
	}

	public function index()
	{
		$data["A"][0] = 1;
		$data["A"][1] = 2;
		$data["A"][2] = 3;
		$data["A"][3] = 4;
		$data["A"][4] = 5;
		$data["A"][5] = 6;
		$data["A"][6] = 7;
		$data["A"][7] = 8;
		$data["A"][8] = 9;
		$data["A"][9] = 10;
		$data["A"][10] = 11;
		$data["A"][11] = 12;

		$data["B"][0] = 1;
		$data["B"][1] = 2;
		$data["B"][2] = 3;
		$data["B"][3] = 4;
		$data["B"][4] = 5;
		$data["B"][5] = 6;
		$data["B"][6] = 7;
		$data["B"][7] = 8;
		$data["B"][8] = 9;
		$data["B"][9] = 10;
		$data["B"][10] = 11;
		$data["B"][11] = 12;

		$data["C"][0] = 1;
		$data["C"][1] = 2;
		$data["C"][2] = 3;
		$data["C"][3] = 4;
		$data["C"][4] = 5;
		$data["C"][5] = 6;
		$data["C"][6] = 7;
		$data["C"][7] = 8;
		$data["C"][8] = 9;
		$data["C"][9] = 10;
		$data["C"][10] = 11;
		$data["C"][11] = 12;

		$data["D"][0] = 1;
		$data["D"][1] = 2;
		$data["D"][2] = 3;
		$data["D"][3] = 4;
		$data["D"][4] = 5;
		$data["D"][5] = 6;
		$data["D"][6] = 7;
		$data["D"][7] = 8;
		$data["D"][8] = 9;
		$data["D"][9] = 10;
		$data["D"][10] = 11;
		$data["D"][11] = 12;

		$data["E"][0] = 1;
		$data["E"][1] = 2;
		$data["E"][2] = 3;
		$data["E"][3] = 4;
		$data["E"][4] = 5;
		$data["E"][5] = 6;
		$data["E"][6] = 7;
		$data["E"][7] = 8;
		$data["E"][8] = 9;
		$data["E"][9] = 10;
		$data["E"][10] = 11;
		$data["E"][11] = 12;

		$data["F"][0] = 1;
		$data["F"][1] = 2;
		$data["F"][2] = 3;
		$data["F"][3] = 4;
		$data["F"][4] = 5;
		$data["F"][5] = 6;
		$data["F"][6] = 7;
		$data["F"][7] = 8;
		$data["F"][8] = 9;
		$data["F"][9] = 10;
		$data["F"][10] = 11;
		$data["F"][11] = 12;

		$data["G"][0] = 1;
		$data["G"][1] = 2;
		$data["G"][2] = 3;
		$data["G"][3] = 4;
		$data["G"][4] = 5;
		$data["G"][5] = 6;
		$data["G"][6] = 7;
		$data["G"][7] = 8;
		$data["G"][8] = 9;
		$data["G"][9] = 10;
		$data["G"][10] = 11;
		$data["G"][11] = 12;

		$data["H"][0] = 1;
		$data["H"][1] = 2;
		$data["H"][2] = 3;
		$data["H"][3] = 4;
		$data["H"][4] = 5;
		$data["H"][5] = 6;
		$data["H"][6] = 7;
		$data["H"][7] = 8;
		$data["H"][8] = 9;
		$data["H"][9] = 10;
		$data["H"][10] = 11;
		$data["H"][11] = 12;

		$data["I"][0] = 1;
		$data["I"][1] = 2;
		$data["I"][2] = 3;
		$data["I"][3] = 4;
		$data["I"][4] = 5;
		$data["I"][5] = 6;
		$data["I"][6] = 7;
		$data["I"][7] = 8;
		$data["I"][8] = 9;
		$data["I"][9] = 10;
		$data["I"][10] = 11;
		$data["I"][11] = 12;

		$data["HASIL"] = array();
		$angka = 0;
		$jumlah_seluruh =0;

	
        
        for($i = 0 ; $i < count($data["A"]) ; $i++){
			//echo "<br> A". $data["A"][$i]." B ".$data["B"][$i]." C ".$data["C"][$i]." D ".$data["D"][$i]."E".$data["E"][$i]."F".$data["F"][$i]."G".$data["G"][$i]."H".$data["H"][$i]."I".$data["I"][$i]."<br>";
			$angka =  $data["A"][$i] + $data["B"][$i] + $data["C"][$i] + $data["D"][$i] + $data["E"][$i] + $data["F"][$i] + $data["G"][$i] + $data["H"][$i] + $data["I"][$i];
			$data["HASIL"][$i] = $angka;
			
		}
		$data["KESELURUHAN"] = array_sum($data["HASIL"]);
	
		echo json_encode($data);
		
	}
    
}
