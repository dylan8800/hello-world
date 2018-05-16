<!DOCTYPE html>
<html>
<head>
	<title>toets</title>
</head>
<body>
<b> Vervangen autosoorten: </b><br>
<form method= 'post'>
	<p> oude autosoort </p>
	<input type=text name=oud><br>
	<p> nieuwe autosoort <p>
	<input type=text name=nieuw><br>
	<input type =submit name=autovervang value="vervang">
</form>

<?php
	include('verbindingauto.php');

	//if(isset("POST['autovervang']")){
	$id = "select id where soort ='POST[oud]'"; 
	$selectedID = "10";
	if($row = mysqli_query($link,$id))
		{
			$selectedID = $row['0'];
		}	
	
	$update = "update dbautos.autosoorten SET `soort`='Renault' WHERE `id`='".$selectedID."'";
	echo "<br>";
	if($row = mysqli_query($link,$update))
		{
			echo "vervangen gelukt";
		}	
		else
		{
			echo "vervangen mislukt";
		}
	//}
		mysqli_close($link);
?>
</body>
</html>