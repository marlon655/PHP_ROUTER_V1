<?php
	namespace System;
	require_once 'Mysql.php';
	use PDO;
	
	class Model{
		public function mostrarDetalhes(){
			$sql = \Mysql::conectar()->prepare("SELECT * FROM `tabela1`");
			$sql->execute();
			return $sql->fetchAll();
        // echo "Model da pasta System";
        }
	}