<?php

	include_once("./crud.php");

	class register extends database {

		public $username;
		public $password;
		public $email;

		public function __construct($username, $password, $email) {
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}

		public function register() {
			$this->insert("users", array("username" => $this->username, "password" => $this->password, "email" => $this->email));
		}
	}
?>
