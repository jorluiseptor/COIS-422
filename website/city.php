
<h1>Worlds</h1>

<?php
    echo "These are my cities <br>";
?>

<?php
//Step1
 $db = mysqli_connect('localhost','root','','world')
 or die('Error connecting to MySQL server.');
?>

<?php
//Step2
$query = "SELECT * FROM city";
//mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
//$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['ID'] . ' ' . $row['Name'] . ': ' . $row['CountryCode'] . ' ' . $row['District']. ' ' . $row['Population'] .'<br />';
}

//Step 4
mysqli_close($db);

?>

