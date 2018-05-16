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
		$vraag = "select * from autosoorten where prijs > 100000";
	
		if($result = mysqli_query($link,$vraag))
		{
			while($row = mysqli_fetch_row($result))
			{
				echo "<br>";
				echo $row[0]." - ".$row[1]." - prijs: ".$row[3];
				
			}
		}

	}
	//mysqli_close($link);

	echo "<form method='post'>";
	echo "<br><br>";
	echo "<p>ID: <input type=text name = id><p>";
	echo "<input name= cmdprijs type= submit value='pas prijs aan'>";
	echo "</form>";

	if(isset($_POST['cmdprijs']))
	{
		$aanpassen = "update autosoorten set prijs= 35000 where id =".$_POST['id'];
		if(mysqli_query($link,$aanpassen))
		{
			echo '<br> update gelukt';
		}
		else 
		{
			echo "<br> geen resultaat van de query";
		}
	}
	mysqli_close($link);
 ?>
</body>
</html>