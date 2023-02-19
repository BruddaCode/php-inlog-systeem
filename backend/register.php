<?php

	include_once("./backend/crud.php");

	class register extends database {

		public $username;
		public $password;
		public $email;

		public function __construct($username, $password, $email) {
			parent::__construct();
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}

		public function register() {
			$duplicate_check = $this->select("users", "*", "username='" . $this->username . "' OR email='" . $this->email . "' LIMIT 1")->num_rows;
			
			if($duplicate_check){
				return false;
			} else {
				$this->insert("users", array("username" => $this->username, "password" => $this->password, "email" => $this->email, "creation_date" => 0));
				return true;
			}
			
			
		}
	}
?>
