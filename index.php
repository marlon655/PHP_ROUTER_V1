<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','teste');

	include 'config.php';
	use System\Route;
	
	Route::GET('contato','contato','info');
	?>