<?php
class Model
{


	function __construct(){
		
		
	}
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/
	public function get_connect_db(){
		return $conn_db = new PDO("mysql:host=localhost;dbname=email", "root", "9213");
	}

	// метод выборки данных
	public function get_data()
	{
		// todo
	}
}