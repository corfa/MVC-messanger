<?php

class Model
{


	function __construct(){
		
		
	}
	
	public function get_connect_db(){
		return $conn_db = new PDO("mysql:host=localhost;dbname=email", "root", "9213");
	}


	public function get_data()
	{
		// todo
	}
}