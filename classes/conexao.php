<?php
include('..\config\config.php');

class conexao{
	private  $coon = '';

	function __construct(){
		try {
			$this->coon = new PDO('mysql:host='.HOST.';dbname='.DB.'',USER,PASSWD);
			$this->coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'ERROR' . $e.getMessage();
		}
	}
}