<?php 
include('verbinding.php');
if($link)
{
	$vraag = 'select contactFirstName,contactLastName FROM classicmodel.customers where country= "France";';

	if($result = mysqli_query($link,$vraag))
	{
		while ($row = mysqli_fetch_row($result))
		{
			echo $row[0].' '.$row[1];
			echo '<br>';
		}
	}
	else {echo '<br>geen resultaat van de query';}
}
mysqli_close($link);

 ?>