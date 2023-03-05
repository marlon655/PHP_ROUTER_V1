<?php
	namespace System;
	require_once 'Mysql.php';
	//use System/MySql;
	use PDO;
	
	
	class Model{
		//Metodos para manipulaçao de dado da DB.
		public function mostrarDetalhes(){
			$sql = \Mysql::conectar()->prepare("SELECT * FROM `tabela1`");
			$sql->execute();
			return $sql->fetchAll();
        // echo "Model da pasta System";
        }
	}