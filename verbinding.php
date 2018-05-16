<?php 
	$link = mysqli_connect('localhost','root','Test123','classicmodels');

	if($link)
	{
		echo 'verbinding gelukt';
	}
	else
	{
		echo 'failed connection'.mysqli_connect_error();
	}
 ?>