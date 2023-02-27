<?php
	namespace App\Controller;
	use System\Controller as Controller;
	use App\Model\Contato as mod;
	
	class Contato extends Controller{
		public function info(){
			$c = new mod();
			$c = $c->S_info();
			print_r($c);
			// echo "PASTA(App\Controller - Conatato).";
		}
	}