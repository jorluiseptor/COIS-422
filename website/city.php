
<h1>Worlds</h1>

<?php
    echo "These are my cities <br>";
?>

<?php
//Step1
 $db = mysqli_connect('localhost','root','','world')
 or die('Error connecting to MySQL server.');

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

    <?php
        //Step1
        $db = mysqli_connect('localhost','root','','world')
        or die('Error connecting to MySQL server.');

        //Step2
        $query = "SELECT Code, Name FROM country";
        //run sql query
        $result = mysqli_query($db, $query);

        //drop-down menu tag
        echo '<select name="CountryCode">';

            while ($row = mysqli_fetch_array($result)) {
                //for each row, create an option tag 
                //<option value="PUR">Peru</option>
                echo '<option value="' .  $row['Code'] . '">' . $row['Name'] . '</option>';
            }
            
        echo '</select>'; //close select tag

        //Step 4
        mysqli_close($db);
    ?>



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