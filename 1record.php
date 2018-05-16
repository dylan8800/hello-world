<?php 
//Delano Sergeant
//verbinding met database

include('verbinding.php');

//query opstellen
$vraag = 'select customername, city from customers where customerNumber = 112';


//query uitvoeren
$result = mysqli_query($link,$vraag);

//het resultaat verwerken
$row = mysqli_fetch_assoc($result);
echo '<br>';
echo 'De naam van de klant is: '.$row['customername'].".<br>";
echo 'De klant woont in: '.$row['city'];

//alternative methode

//query uitvoeren
$result = mysqli_query($link,$vraag);

//het resultaat verwerken
$row = mysqli_fetch_row($result);
echo '<br><br>';
echo "alternative:";
echo '<br>';
echo 'De naam van de klant is: '.$row[0].".<br>";
echo 'De klant woont in: '.$row[1];

//de verbinding sluiten
mysqli_close($link);

 ?>