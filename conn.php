<?php

        $dbcon = mysqli_connect("127.0.0.1","root","","nielit");
		if($dbcon-> connect_error)
		{
			die("Connection failed:". $dbcon-> connect_error);
		}
?>