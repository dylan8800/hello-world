<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include ('verbinding.php');

	$vraag = 'select * from customers';

	if($result = mysqli_query($link,$vraag))
	{
		echo '<table>';

		while($row = mysqli_fetch_row($result))
		{

		echo '<tr><td>';

		echo '<br>'.$row[0];
		echo '</td><td>';
		echo $row[1];
		echo '</td>';
		echo '</tr>';
		}
		
	}
	echo '</table>';
	mysqli_close($link);

 ?>


</body>
</html>

//' - '.$row[1].' - '.$row[2].' - phone: '.$row[4];