
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

<h2>Add new city</h2>
<form action="addcity.php" method="post"/>

    <label>City Name:</label>
    <input type="text" name="Name"/>
    <br>
    <br>
    <label>Country Code:</label>
    <input type="text" name="CountryCode"/>



    
    <select>
        <option value="PRI">Puerto Rico</option>
        <option value="DOM">Dominican Republic</option>
        <option>fasf</option>
        <option>fasf</option>
        <option>fasf</option>
        <option>fasf</option>
        <option>fasf</option>
        <option>fasf</option>
    </select>
    <br>
    <br>
    <label>District:</label>
    <input type="text" name="District"/>
    <br>
    <br>
    <label>Population:</label>
    <input type="text" name="Population"/>

    <br>
    <br>
    <input type="submit" value="Submit"/>


</form>