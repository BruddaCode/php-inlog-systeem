<?php

	include_once("./crud.php");

	class login extends database {

		public $username;
		public $password;

		public function __construct($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}

		public function login() {
			return $this->select("users", "*", "username = '$this->username' AND password = '$this->password'");
			
		}
	}
?>
