<?php 
	include ('verbinding.php');

	$vraag = 'select * from customers';

	if($result = mysqli_query($link,$vraag))
	{
		while($row = mysqli_fetch_row($result))
		echo '<br>'.$row[0].' - '.$row[1].' - '.$row[2].' - phone: '.$row[4];
	}

mysqli_close($link);
 ?>