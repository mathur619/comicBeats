<?php
$host="localhost";
$user="root";
$pass="mathur619";
$dbname="form";

$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");
// Create a query for the database
$username=$_POST['username'];
$password=$_POST['password'];



$response =mysqli_query($conn,"select * from users where password= '$password'&& username= '$username' ")
					or die("unable to query database".mysqli_error($conn));


// Get a response from the database by sending the connection
// and the query

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>username</b></td>
<td align="left"><b>age</b></td>
<td align="left"><b>gender</b></td>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['first_name'] . '</td><td align="left">' . 
$row['last_name'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' . 
$row['username'] . '</td><td align="left">' .
$row['age'] . '</td><td align="left">' . 
$row['gender'] . '</td><td align="left">' ;

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($conn);

}

// Close connection to the database
mysqli_close($conn);

?>