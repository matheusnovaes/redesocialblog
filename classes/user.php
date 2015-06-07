<?php
require('conexao.php');

class user extends conexao{

	public $nome;
	public $sobrenome;
	public $date;
	public $login;
	public $senha;
	public $ativo;

	public function createUser(){
		echo 'create user';
		return true;
	}

	public function editUser(){
		return true;
	}

	public function viewUser(){
		print_r($_GET);
		return true;
	}

	public function deleteUser(){
		return true;
	}
}