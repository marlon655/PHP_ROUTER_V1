<?php
	namespace App\Model;
	
	use System\Model as mod;

	class Contato extends mod{
		public function info(){
			echo "PASTA(App\Model - Conatato).";
		}

		public function S_info(){
			return $this->mostrarDetalhes();

			// $n = new mod();
			// $n->mostrarDetalhes();
		}
	}