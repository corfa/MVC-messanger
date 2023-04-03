<?php

class Model
{
	protected  $conf;
	protected  $DBHost;
	protected  $DBPassword;
	protected  $DBUser;
	protected  $DBName;

	function __construct(){
		$this->conf=json_decode(file_get_contents("application/config/env.json"));
		$this->DBHost=$this->conf->DBHost;
		$this->DBPassword=$this->conf->DBPassword;
		$this->DBUser=$this->conf->DBUser;
		$this->DBName=$this->conf->DBName;


		
	}
	
	public function get_connect_db(){
		return $conn_db = new PDO("mysql:host=".$this->DBHost.";dbname=".$this->DBName, $this->DBUser, $this->DBPassword);

		//return $conn_db = new PDO("mysql:host=localhost;dbname=email", "root", "9213");
	}


	public function get_data()
	{
		// todo
	}
}