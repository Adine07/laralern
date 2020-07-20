<?php 

	/**
	 * 
	 */
	class Halaman
	{

		protected $halaman;

		public function ShowHalaman(){
			return $this->halaman;
		}
	}

	
	class Rumah extends Halaman
	{
		
		function __construct($type, $halaman)
		{
			$this->type = $type;
			$this->halaman = $halaman;
		}

		protected $type;
		private $lantai = "Satu";

		public function SetLantai($lantai){
			$this->lantai = $lantai;
		}

		public function ShowType(){
			return $this->type;
		}

		public function ShowLantai(){
			return $this->lantai;
		}

	}

	// $rumah = new rumah();
	// $rumah->SetTypeRumah = "2x1m";
	// echo $rumah->ShowType();


	// $rumah = new Halaman();
	// // $rumah->SetHalaman = "2x1m";
	// echo $rumah->ShowHalaman();

	$rumah = new Rumah("2x1", "taman bunga");

	echo "Saya memesan rumah dengan type: " . $rumah->ShowType() . " dan memiliki " . $rumah->ShowLantai() . " lantai, dengan halaman " . $rumah->ShowHalaman() . "<br/>";

	$rumah->SetLantai("tujuh");

	echo "Saya memesan rumah dengan type: " . $rumah->ShowType() . " dan memiliki " . $rumah->ShowLantai() . " lantai, dengan halaman " . $rumah->ShowHalaman() ;


?>