<?php 

	/**
	 * 
	 */
	class Rumah
	{
		
		function __construct(argument)
		{
			# code...
		}

		protected $type = "Belum memilih type rumah";
		protected $laintai = "Satu lantai";

		public function SetTypeRumah($type){
			$this->type = $type;
		}

		public function ShowType(){
			return $this->type;
		}

	}

	$rumah = new rumah();
	$rumah->SetTypeRumah = "2x1m";
	echo $rumah->ShowType();

?>