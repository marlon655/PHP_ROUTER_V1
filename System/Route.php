<?php
    namespace System;

	class Route
	{
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
	} 
	?>
