<?php 
	//verbinding db
	include ('verbindingauto.php');
	//als er verbinding is

	if($link)
	{
		//query
		$vraag = 'select naam, geslacht, woonplaats from mensen';

		//als er een resultaat is
		if($result = mysqli_query($link,$vraag))
		{
			// toon de records
			while ($row = mysqli_fetch_row($result))
			{
				echo $row[0].' - woonplaats: '.$row [2].' - '.$row[1];
				echo '<br>';
			}
		}
		else 
		{ echo '<br> geen resultaat van de query' ;}
	}

	mysqli_close($link);
 ?>