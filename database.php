<?php
$servername="localhost";
$username="root";
$password="";
$databasename="online_shopping";

	$connection=new mysqli($servername,$username,$password,$databasename);
		if($connection->connect_error)
		{
			DIE("Connection failed:".$connection->connect_error);

		}
			//echo "Connected successfully";	


?>