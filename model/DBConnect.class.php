<?php

class DBConnect{
	protected $conn;

	public function __construct(){
		$this->conn = mysqli_connect("localhost","root","","own") or die ('can not connect database');
		mysqli_query($this->conn,'set names utf8');
	}

}