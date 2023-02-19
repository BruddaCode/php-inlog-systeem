<?php

	include_once("./backend/crud.php");

	class login extends database {

		public $username;
		public $password;

		public function __construct($username, $password) {
			parent::__construct();
			$this->username = $username;
			$this->password = $password;
		}

		public function login() {
			//Get sql object
			$sql_object = $this->select("users", "*", "username='" . $this->username . "' AND password='" . $this->password . "' LIMIT 1");
			$login_object = array();

			// Create login object from the sql object given.
			if($sql_object["num_rows"] == 1){
				$login_object["logged_in"] = true;
				$login_object["uid"] = $sql_object["rows"]["uid"];
				$login_object["username"] = $sql_object["rows"]["username"];
			} else {
				$login_object["logged_in"] = false;
			}
			
			return $login_object;
			
		}
	}
?>
