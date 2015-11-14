<?php

include_once('DBConnect.class.php');

class Form1Operator extends DBConnect{


	public function __construct()
	{
		parent::__construct();
	}


	// public function select(){
	// 	$sql = 'select * from `form1` where `id`='.$id.''
	// }

	public function insert($title,$content){

		return mysqli_query($this->conn,'insert into `form1` (`title`,`contents`,`dates`) values (\''.$title.'\',\''.$content.'\',now())');
	}


	public function find($keys){
		if(!empty($keys))
			$w = '`title` like \'%'.$keys.'%\'';
		else
			$w = 1;
		$sql = 'select * from `form1` where '.$w.' order by id desc';
		$res = mysqli_query($this->conn,$sql);
		$rs = array();
		while($one = mysqli_fetch_array($res)){
			$rs[] = $one;	
		}
		return $rs;
	}


	public function select($id){
		$query = mysqli_query($this->conn,'select * from `form1` where `id`='.$id);
		return $rs = mysqli_fetch_array($query);
	}

	public function delete($id){
		return mysqli_query($this->conn,'delete from `form1` where `id`='.$id);
	}

	public function update($id,$title,$content){
		return mysqli_query($this->conn,'update `form1` set  `title`=\''.$title. '\',`contents`=\''.$content.'\', `dates` = now() where `id`='.$id);
	}

}