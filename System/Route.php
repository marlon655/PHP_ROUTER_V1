<?php
    namespace System;

	class Route
	{
		// public $path;
		public static function GET($path,$controller,$action)
		{
			$url = $_GET['url'];
			if($path == $url){
				
				// $start = new App\Controlle/$controller();
                // $start->$action();
                $control = '\App\Controller\\'.$controller;
                $start = new $control();
				$start->$action();
			}
		}

		public function param($arg){
			$K = [];
			$explode = explode('/',$path);
			$url = $_GET['url'];

			for($i=0; $i< count($explode); $i++){
				if($explode[$i][0] == ':'){
					$replace = str_replace(':','',$explode[$i]);
					$K[$replace] = $url[$i];
				}
			}
			return $K[$arg];
		}
		
	}
	?>
