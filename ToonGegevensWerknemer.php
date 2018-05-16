<!DOCTYPE html>
<html>
<head>
	<title>Een combobox opvullen met gegevens</title>
</head>
<body>
<?php 
	//verbinding met database
include('verbinding.php');
echo '<br>';
if($link)
{
	$vraag='select * from employees where lastname = "'.$_POST['cmbNamen'].'"';
	echo '<br>';
	if($result = mysqli_query($link,$vraag)) // query uitvoeren
	{
		echo '<b>Adresgegevens van '.$_POST['cmbNamen'].': </b> <br><br>';

		while($row = mysqli_fetch_row($result))//alle rijen overlopen
		{
			echo'ID: '.$row[0].'<br>';
			echo'LASTNAME:'.$row[1].'<br>';
			echo'FIRSTNAME: '.$row[2].'<br>';
			echo'EMAIL: '.$row[4].'<br>';
			echo'JOBTITLE: '.$row[7].'<br><br>';
		}
	}
	else
	{
		echo '<br> geen resultaat van de query';
	}
}
else
{
	echo 'Failed to connect to MySQL: ('.mysqli_connect_error().') ';
}

mysqli_close($link);

 ?>


</body>
</html>