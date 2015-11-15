

<?php

class DBConnect{
	protected $conn;

	public function __construct(){
		$this->conn = mysqli_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS) or die ('can not connect database');
		if($this->conn)
			{
			    mysqli_select_db($this->conn，SAE_MYSQL_DB);
			}
		mysqli_query($this->conn,'set names utf8');
	}	

}