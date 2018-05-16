<!DOCTYPE html>
<html>
<head>
	<title>toets</title>
</head>
<body>
<?php 
	include('verbinding.php');
	$jobvraag = "select distinct(jobTitle) FROM classicmodels.employees";
	
	if($row = mysqli_query($link,$jobvraag))
	{	
		echo "<form method='POST' action =''>";
			echo "<br> <select name ='jobs' height= 1>";
			while($result = mysqli_fetch_row($row))
				{
				echo "<option name='jobkeuze' value='".$result['0']."'>".$result['0']."</option>";
				}
			echo "</select>";
			echo "<br> <input type='submit' name ='selectedjob'>";
		echo "</form>";
	}
	//if(isset("POST[selectedjob]"))
	//{
	//$vraag = "select lastName,firstName from classicmodels.employees where jobTitle = 'POST['jobkeuze']'";
	$vraag = "select lastName,firstName from classicmodels.employees where jobTitle = 'Sales Rep'";
	if($row = mysqli_query($link,$vraag))
		{
			echo "Resultaat van de keuze";
			while($result = mysqli_fetch_row($row))
			{
				echo "<br>".$result[0]." ".$result[1];
			}
		}	
	//}
	mysqli_close($link);
 ?>
</body>
</html>