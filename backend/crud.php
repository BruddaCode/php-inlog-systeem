<?php 

	// Include the config file
	include_once("./config.php");



	class database extends config {

		public $que;
		public $sql;

		private $result=array();
		private $mysqli='';


		public function __construct(){
			$this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_data);
		}


		public function insert($table,$para=array()){

			$table_columns = implode(',', array_keys($para));
			$table_value = implode("','", $para);

			$sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

			$result = $this->mysqli->query($sql);
		}


		public function update($table,$para=array(),$id){

			$args = array();

			foreach ($para as $key => $value) {
				$args[] = "$key = '$value'"; 
			}

			$sql="UPDATE  $table SET " . implode(',', $args);
			$sql .=" WHERE $id";

			$result = $this->mysqli->query($sql);
		}


		public function delete($table,$id){

			$sql="DELETE FROM $table";
			$sql .=" WHERE $id ";


			$result = $this->mysqli->query($sql);
		}




		public function select($table, $rows="*", $where = null){
			if ($where != null) 
				$sql="SELECT $rows FROM $table WHERE $where";
			else
				$sql="SELECT $rows FROM $table";

			$this->sql = $result = $this->mysqli->query($sql);
		}


		public function __destruct(){
			$this->mysqli->close();
		}

	}

?>
