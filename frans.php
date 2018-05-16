<?php 
	include('verbinding.php');

	$vraag = 'select contactLastName, contactFirstName from customers where country = "France"';

	if($result = mysqli_query($link,$vraag))
	{
		while($row = mysqli_fetch_row($result))
		{
			echo '<br>'.$row[0].' '.$row[1];
		}
	}
mysqli_close($link);
 ?>