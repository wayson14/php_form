<?php
	include 'methods.php';
	class Field 
	{
		public $name;
		public $fullname;
		
		public function __construct($name){
			$this->name = $name;
			$this->fullname = strtoupper(str_replace('_', ' ', $name));

			if($name == 'imie'){
				$this->placeholder = $name;
				public

			}
			else if($name == 'nazwisko'){
				$this->placeholder = $this->name;

			}
			else if($name == 'data_urodzenia'){
				$this->placeholder = "dd-mm-rrrr";
			}
			else if($name == 'pesel'){
				$this->placeholder = $this->fullname;
			}
			else if($name == 'nip'){
				$this->placeholder = $this->fullname;
			}
			else if($name == 'kod_pocztowy'){
				$this->placeholder = $this->name;
			}
			else if($name == 'miasto'){
				$this->placeholder = $this->name;
				
			}
			else if($name == 'adres'){
				$this->placeholder = $this->name;
			}
			else if($name == 'e-mail'){
				$this->placeholder = $this->name;
			}
			else if($name == 'telefon_komorkowy'){
				$this->placeholder = "+xx xxx xxx xxx";
			}
			else if($name == 'telefon_stacjonarny'){
				$this->placeholder = "+xx xxx xx xx";
				
			}

		}
	}

	$field_names = [
		'imie',
		'nazwisko',
		'data_urodzenia',
		'pesel',
		'nip',
		'kod_pocztowy',
		'miasto',
		'adres',
		'e-mail',
		'telefon_komorkowy',
		'telefon_stacjonarny'
	];

	
?>