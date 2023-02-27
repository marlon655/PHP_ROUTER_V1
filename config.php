<?php

	$autoloader = function($filePath){
		echo $filePath;
		echo "<br>";
		$path = $filePath;
		$pathArchive = str_replace("\\", DIRECTORY_SEPARATOR, $path);
		$pathArchive.=".php";
		if(file_exists($pathArchive)){
			require_once $pathArchive;
		}

	};
	spl_autoload_register($autoloader);