<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="					  sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css\animate.css">
	<link rel="stylesheet" type="text/css" href="css/facts.css">

	<script src="js/wow.min.js"></script>
		<script>
  			new WOW().init();
  		</script>

</head>
<body>
<div class =" container ">
<?php
	$host="localhost";
	$user="root";
	$pass="mathur619";
	$dbname="character";

	$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");

	$fname=$_POST['fName'];
	$lname=$_POST['lName'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$q=mysqli_query($conn,"insert into users (fname,lname,email,username,password,type,login) values ('$fname','$lname','$email','$username','$password',0,1)");
	if(isset($q)){
	echo "<h1 class='fact wow zoomIn'>Sign Up Successful</h1>";
	}

	$myfile=fopen("username.txt",'w') or die ("unable to open file");
	fwrite($myfile, $username);
	fwrite($myfile,'
		');
	fwrite($myfile,$password);

?>
<div>
<a href="login.php">
<input type="submit" name="Get Started!" value="Get Staretd! " class="btn btn-default btn-lg wow slideInDown">
</a>
</div>
</div>
</body>
</html>