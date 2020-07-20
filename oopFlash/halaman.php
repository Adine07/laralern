<?php 

	/**
	 * 
	 */
	class Halaman
	{

		protected $halaman = "Kosong";
		
		protected function SetHalaman($halaman){
			$this->halaman = $halaman;
		}

		public function ShowHalaman(){
			return $this->halaman;
		}
	}

?>