<?php

//connect to database 
 $db = mysqli_connect('localhost','root','','world')
 or die('Error connecting to MySQL server.');

//get values
$value = $_POST['Name'];
$value2 = $_POST['CountryCode'];
$value3 = $_POST['District'];
$value4 = $_POST['Population'];
//Step2
$query =  "INSERT INTO city (Name,CountryCode,District,Population) VALUES ('$value', '$value2','$value3','$value4')";

//run query
$result = mysqli_query($db, $query);

//close connection
mysqli_close($db);

?>

<p>
    Your information has been added. <a href="city.php">See all cities</a> || 
    <a href="country.php">See all countries</a>
</p>