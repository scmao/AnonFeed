<?php
// Our database class
if(!class_exists('TestDatabase'))
{
	class TestDatabase
	{
		//Connects to the database server and selects a database
		function TestDatabase()
		{
			return $this->__construct();
		}

		//Connects to the database server and selects a database
		function __construct()
		{
			$this->connect();
		}

		//Connect to and select database
		function connect()
		{
			$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

			if(!$link)
			{
				die('Could not connect: ' . mysql_error());
			}

			$db_selected = mysql_select_db(DBNAME, $link);

			if(!db_selected)
			{
				die('Can\'t use ' . DB_NAME, ': ' . mysql_error());
			}	
		}
		
		//Clean the array
		function clean($array)
		{
			return array_map('mysql_real_escape_string', $array);
		}

		//Generates hashed password
		function hash_password($password, $nonce)
		{
			$secureHash = hash-hmac('sha512', $password, $nonce, SITE_KEY);

			return $secureHash;
		}

		//Insert data into the database
		function insert($link, $table, $fields, $values)
		{
			$fields = implode(", ", $fields);
			$values = implode("', '", $values);
			$sql = "INSERT INTO $table (id, $fields) VALUES ('', '$values')";

			if (!mysql_query($sql))
			{
				die('Error: ' . mysql_error());
			}
			else
			{
				return TRUE;
			}
		}

		//Select data from the database
		function select ($sql)
		{
			$results = mysql_query($sql);

			return $results;
		}
	}
}
$jdb = new TestDatabase;
?>