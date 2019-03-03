<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="					  sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css\animate.css">
	<link rel="stylesheet" type="text/css" href="css/fact.css">

	<script src="js/wow.min.js"></script>
		<script>
  			new WOW().init();
  		</script>

</head>
<body>



<div class ='container'>
<?php
	

	$host="localhost";
	$user="root";
	$pass="mathur619";
	$dbname="character";

	$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$q=mysqli_query($conn,"update users set login=1 where username='$username' and password ='$password'");
	$q1=mysqli_query($conn,"select login from users where username='$username' ");
	$r=mysqli_fetch_array($q1);
	
	if($r['login']){

		echo"<h1 class='fact wow zoomIn'>Login Successful<hr>FunFacts</h1>";
		echo "<div class='content wow zoomIn'>";
		$myfile= fopen("facts.txt",'r') or die ("unable to open file");
		echo fread($myfile,filesize("facts.txt"));
		echo "</div>";
		echo "<div>
				<a href='login.php'>
				<input type='submit' name='Get Started!' value='Get Staretd! ' class='btn btn-default btn-lg wow slideInDown'>
				</a>
				</div>";
				
	}
	else{
		echo"<div class='fact'>";
		echo "Login Unsuccessful!";
		echo "<hr>"."Invalid username or password!";
		echo "<div>
				<a href='login.html'>
				<input type='submit' name='Try again' value='Try again ' class='btn btn-default btn-lg wow slideInDown'>
				</a>
				</div>";
				echo "</div>";

	}

	$myfile=fopen("username.txt",'w') or die ("unable to open file");
	fwrite($myfile, $username);
	fwrite($myfile,'
		');
	fwrite($myfile,$password);
?>

</div>

</body>
</html>