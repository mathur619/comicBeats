<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.p3{
	background:url("367804.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	color:ghostwhite;
	}
	h2{
		margin-left: 4%;

	}
	
	</style>
	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/particularcomics.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	    crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="bootstrap.js"></script>
</head>

<body>
<div class="jumbotron">
			<h1><i class="fas fa-camera-retro"></i>Comic Beats</h1>
			<p>Best ever fan site you will ever see of comics!</p>
		</div>


<nav class="navbar navbar-inverse ">
	<div class="container">
		<div class="navbar-header">
			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="									  #navcollapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

			<!-- <a href="#" class="navbar-brand"> CB</a> -->
		</div>
		<div class="collapse navbar-collapse" id="navcollapse">
		<ul class="nav navbar-nav">
			<li><a href="login.php">Home</a></li>
			<li><a href="comic.php">Comics</a></li>
			<li><a href="character.php">Characters</a></li>
			<li><a href="store.php">Store</a></li>
		</ul>

		<form class="navbar-form navbar-right" action="login.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <input type="submit" class="btn btn-default" value="Search">
      </form>


		<ul class="nav navbar-nav navbar-right">
			<li><a href="user.php" > 
					<?php
						$myfile2=fopen("username.txt",'r') or die ('unable to open file');
						echo fgets($myfile2);
						
					?>
			</a></li>
			<li><a href="landingpage.php">Logout</a></li>
		</ul>
		</div>
	</div>
</nav>
<?php
	$host="localhost";
	$user="root";
	$pass="mathur619";
	$dbname="character";

	$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");
	$cname=$_POST['productbutton'];
	$q=mysqli_query($conn,"select * from product where pname='$cname'");
	$r=mysqli_fetch_array($q);
	$Image=$r['pimage'];
	$name=$r['pname'];
	$pprice=$r['pprice'];
	$pweight=$r['pweight'];
	$pid=$r['productid'];
	$q2=mysqli_query($conn,"select size from productsize where productid='$pid'");
	$q3=mysqli_query($conn,"select color from productcolor where productid='$pid'");
	
	echo "<div class='p1'>
			<div class='p2'>
				<img  class='imagep2' src=$Image >
			</div>
			<div class='p3'>
				<h2> Name : $name</h2>
				<h2> Price : $pprice</h2>
				<h2> Weight  : $pweight</h2>
				<h2> Available Sizes : </h2>
				";

				while($r2=mysqli_fetch_array($q2)){
				echo "
					
					 <h2> $r2[0] </h2>
				";
				}
				echo "<h2> Available Color : </h2>";
				while($r3=mysqli_fetch_array($q3)){
				echo "
					
					 <h2> $r3[0]</h2>";
				}
				
			echo "</div>";
	

?>
<form>
	<input type="submit" name="buyproduct" value="Buy" class="btn btn-danger buy">
</form>
</div>
</body>
</html>