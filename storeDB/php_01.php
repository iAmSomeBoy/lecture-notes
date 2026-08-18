<!DOCTYPE html>
<html>
<body>
 
<?php

// open connection to MySQL server
$connection = mysql_connect('localhost', 'root', '') or die ('Unable to connect!');


// select database for use
mysql_select_db('cinema') or die ('Unable to select database!');

// create and execute query
$query = 'SELECT * FROM person';
$result = mysql_query($query) or die ('Error in query: $query. ' . mysql_error());


// check if records were returned
if (mysql_num_rows($result) > 0)
{
// print HTML table


echo '<table width=80% cellpadding=10 cellspacing=0 border=4>';

echo '<tr><td><b>ID</b></td><td><b>TITLE</b></td><td><b>GENDER</b></td><td><b>DoB</b></td></tr>';
// iterate over record set
// print each field
while($row = mysql_fetch_row($result))
{
echo '<tr>';
echo '<td>' . $row[0] . '</td>';
echo '<td>' . $row[1] . '</td>';
echo '<td>' . $row[2] . '</td>';
echo '<td>' . $row[3] . '</td>';
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
mysql_free_result($result);

// close connection to MySQL server
mysql_close($connection);


?>

</body>
</html>