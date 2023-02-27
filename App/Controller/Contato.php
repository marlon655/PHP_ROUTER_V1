<?php
	namespace App\Controller;
	use App\Model\Contato as mod;
	
	class Contato{
		public function info(){
			$c = new mod();
			$c->S_info();
			// echo "PASTA(App\Controller - Conatato).";
		}
	}