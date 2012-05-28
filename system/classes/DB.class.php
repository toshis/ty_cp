<?php

class DB 
{
	var $db_connected;
	var $num_rows;
	var $query;
	
	function __construct()
	{
		if(!$this->db_connected) $this->db_connect();
	}
	
	function db_connect()
	{
		if(!$this->db_connected=@mysql_connect(DB_HOST, DB_USER, DB_PASSWORD))
		{
			echo '<div>Ошибка подключения к MYSQL серверу <b>'.DB_HOST.'</b></div>';
			exit();
		}
		
		if(!@mysql_select_db(DB_NAME, $this->db_connected))
		{
			echo '<div>Ошибка подключения к базе <b>'.DB_NAME.'</b></div>';
			exit();
		}
		
		return true;
	}
	
	function query($query)
	{
		$query=mysql_query($query);
		$this->num_rows=mysql_num_rows($query);
		
		return $this->query=$query;	
	}
}

?>