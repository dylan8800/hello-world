<!DOCTYPE html>
<html>
<head>
	<title>Gegevens manipuleren</title>
</head>
<body>
<?php 
	include('verbindingauto.php');

	if($link)
	{
		$vraag = "select * from autosoorten";
	
		if($result = mysqli_query($link,$vraag))
		{
			while($row = mysqli_fetch_row($result))
			{
				echo "<br>";
				echo $row[0]." - ".$row[1]." - ".$row[2]." - ".$row[3];
				
			}
		}

	}

	echo "<form method='post'>";
	echo "<br><br>";
	
	echo "<p>soort: <input type=text name=soort></p>";
	echo "<p>snelheid: <input type=text name=snelheid></p>";
	echo "<p>prijs: <input type=text name = prijs></p>";
	echo "<p>id: <input type=text name= id></p>";

	echo "<input name= cmdExtra type=submit value='toevoegen'>";
	echo "</form>";

	if(isset($_POST['cmdExtra']))
	{
		$invoegen = "insert into autosoorten(id,soort,snelheid,prijs) values ('".$_POST['id']."','".$_POST['soort']."','".$_POST['snelheid']."','".$_POST['prijs']."')";
		echo $invoegen;

		if($result=mysqli_query($link,$invoegen))
		{
			echo "<br> invoegen gelukt";
		}
		else
		{
			echo "<br> fout in de query";
		}
	}
	
	mysqli_close($link);
 ?>
</body>
</html>