
<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
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
			<li><a href="#">Home</a></li>
			<li><a href="#">Comics</a></li>
			<li><a href="#">Characters</a></li>
		</ul>

		<form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <input type="submit" class="btn btn-default" value="Search">
      </form>


		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Users</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		</div>
	</div>
</nav>
	

	




<?php

$host="localhost";
$user="root";
$pass="mathur619";
$dbname="character";

$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!") ;

$fname=$_POST['fName'];
$lname=$_POST['lName'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$q=mysqli_query($conn,"insert into users (firstName,lastName,email,username,password) values ('$fname','$lname','$email','$username','$password')");
if(isset($q))
	echo"Query succesful";

echo '<div class="container">
		
		<div id="newreleases">
			<h1>New Realeases</h1>
		</div>

		<div class="row">';

while($newreleases=mysqli_fetch_array($getcomicidquery)){
	$image=$newreleases['Image'];

	echo '<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src= $image>
				</div>
			</div>
			</div>';

}

echo '</div>';

mysqli_close($conn);

?>


<div class="container">
<div id="blank">
	
</div>
	<div class="row">
		<div  class="col-lg-6 col-sm-3">
		<h1> Who's</h1>
		</div>
    </div>
    <div class="row">
		<div  class="col-lg-6 col-sm-3">
		<h1> Who</h1>
		</div>
	</div>
	<div class="row who">
		<div  class="col-lg-2 col-sm-3" >
			<img src="supermanww.jpg">
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="batmanww.jpg">
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="wonderwomanww.jpg">
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="greenlanternww.jpg">
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="theflashww.jpg">
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="aquamanww.jpg">
		</div>
	</div>
</div>
<hr>
	<div class="last">
			<div id="last_1">

	<table id="table1">
			<tr id="head"><td>		<h1>COMIC BEATS</h1>	</td></tr>
			<tr><td>HOME</td> </tr>
			<tr><td>CHARACTER</td> </tr>
			<tr><td>COMIC</td> </tr>
			<tr><td>TV</td> </tr>
			<tr><td>MOVIES</td> </tr>
			<tr><td>NEWS</td> </tr>
			<tr><td>STORE</td> </tr>
		
	</table>
	</div>
	<div id="last_2">
	<table id="table2">
		<tr id="head"><td><h1>FOLLOW US: </h1></td></tr>
			<tr><td>FACEBOOK</td> </tr>
			<tr><td>INSTAGRAM</td> </tr>
			<tr><td>TWITTER</td> </tr>
	</table>

	</div>
	</div>
	</body>


