<?php
class DBConnect{
	protected $conn;
	public function __construct(){
		$this->conn = mysqli_connect($GLOBAL_DB_CONF['host'].':'.$GLOBAL_DB_CONF['port'],$GLOBAL_DB_CONF['user'],$GLOBAL_DB_CONF['password']) or die ('can not connect database');
		if($this->conn)
			{
			    mysqli_select_db($this->conn,SAE_MYSQL_DB);
			}
		mysqli_query($this->conn,'set names utf8');
	}	

}