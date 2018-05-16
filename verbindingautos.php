<?php
	$link = mysqli_connect('localhost','root','Test123','dbautos');

	if($link)
	{
		echo 'verbinding gelukt';
	}
	else
	{
		echo 'failed connection: '.mysqli_connect_error();
	}



 ?>