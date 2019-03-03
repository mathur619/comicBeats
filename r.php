<?php

$host="localhost";
$user="root";
$pass="mathur619";
$dbname="form";

$conn=mysqli_connect($host,$user,$pass,$dbname) ;
if($conn)
echo "connection successful</br>";
else
	alert("connection unsuccessful");

$fname=$_POST['fName'];
$lname=$_POST['lName'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$q=mysqli_query($conn,"insert into users values('$fname','$lname','$email','$username','$password','$age','$gender') ");
if(isset($q))
	echo"Query succesful";

?>