<!DOCTYPE html>
<html>
<head>
    <title>Database Connection</title>
</head>
<body>
<?php

// Open connection and select database
$connection = new mysqli('127.0.0.1', 'root', '', 'store');

// Check connection
if ($connection->connect_error) 
	{
    die('Unable to connect: ' . $connection->connect_error);
	}

echo "Connected successfully!";

// create and execute query
$query = 'SELECT * FROM items';
$result = mysqli_query($connection, $query) or die ('Error in query: $query. ' . mysqli_error());


// check if records were returned
if (mysqli_num_rows($result) > 0)
{
// print HTML table
echo '<table width=100% cellpadding=10 cellspacing=0 border=1>';
echo
'<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Price</b></td></tr>';
// iterate over record set
// print each field
while($row = mysqli_fetch_row($result))
{
echo '<tr>';
echo '<td>' . $row[0] . '</td>';
echo '<td>' . $row[1] . '</td>';
echo '<td>' . $row[2] . '</td>';
echo '</tr>';
}
echo '</table>';
}
else
{
// print error message
echo 'No rows found!';
}
// once processing is complete
// free result set
mysqli_free_result($result);
// close connection to MySQL server




// Close connection
$connection->close();
?>
</body>
</html>
