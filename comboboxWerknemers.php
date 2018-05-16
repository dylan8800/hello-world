<!DOCTYPE html>
<html>
<head>
	<title>Een combobox opvullen met gegevens</title>
</head>
<body>
<?php 
	//verbinding met database
	include ('verbinding.php');
	echo '<br>';

	if($link)
	{
		$vraag='select distinct lastname from employees order by lastname';

		if ($result=mysqli_query($link,$vraag)) //query uitvoeren
		{
			echo '<h2>Overzicht werknemers:</h2>';
			echo'<form method = post action= '."ToonGegevensWerknemer.php".'>';
			echo '<select name = cmbNamen>';

			while($row=mysqli_fetch_assoc($result)) //alle rijen overlopen
			{
				echo '<option value='.$row['lastname'].'>'.$row['lastname'].'</option>';

			}
			echo '</body>select><br><br>';

			echo '<input type = submit value='."'Toon gegevens'".'>';

			echo '</form>';
		}
		else
		{
			echo '<br> geen resultaat van de query';
		}
		mysqli_close($link);
		}
		else
		{
			echo 'Failed to connect to MySQL: ( '.mysqli_connect_error().') ';
		}

 ?>

</body>
</html>