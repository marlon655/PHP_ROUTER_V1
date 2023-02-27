<?php
	namespace App\Controller;
	use system\Controller as Controller;
	use App\Model\Contato as mod;
	
	class Contato extends Controller{
		public function info(){
			$c = new mod();
			$c->S_info();
			// echo "PASTA(App\Controller - Conatato).";
		}
	}