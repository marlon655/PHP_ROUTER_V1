<?php
	include 'config.php';

	use System\Controller as C_System;
	use System\Model as S_System;
	use App\Controller\Contato as C_Contato;
	use App\Model\Contato as M_Contato;

	// $Mcontato = new M_Contato();
	// $Mcontato->S_info();
	echo "<br>";
	// $sistema = new C_System();
	// $sistema->mostrarDetalhes();
	echo "<br>";
	$contact = new C_Contato();
	$contact->info();