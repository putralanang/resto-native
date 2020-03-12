<?php
class database{
	private $db = [
   'host' => 'localhost',
   'username' => 'root',
   'password' => '',
   'database' => 'restoo',


	];
	public function data(){
		return $this->db;
	}
}