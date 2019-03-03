
<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
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

		<form class="navbar-form navbar-right" action="search.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
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


	$myfile=fopen("username.txt",'r') or die ('unable to open file');
	$username=fgets($myfile);
	$password=fgets($myfile);



$response =mysqli_query($conn,"select * from users where password= '$password'&& username= '$username' ")
					or die("unable to query database".mysqli_error($conn));

$getcomicid="select Name,Image from comicinfo order by comicId DESC";
$getcomicidquery= mysqli_query($conn,$getcomicid) or die("getcomicidquery unsuccessful!");


echo '<div class="container">
		<div id="newreleases">
			<h1>NEW RELEASES</h1>
		</div>';
echo '</div>';
$count;		

echo "<div class='cbutton'>";
for($count=0;$count<=3;$count++){
$newreleases=mysqli_fetch_array($getcomicidquery);
	$image=$newreleases['Image'];
	$name=$newreleases['Name'];
	echo "<form action='particularcomic.php' method='post'>
		<button class='comicbutton' value=$name name='comicbutton' id='comicbutton'>";
				echo "	<img class ='comicimage' src= $image height='500' width='350'> <br><h4>$name</h4>";
				echo "</button> </form>";
}

echo "</div>";


mysqli_close($conn);

?>


<div class="container">

	<div class="row" id="whos">
		<div  class="col-lg-6 col-sm-3">
		<h1> FEATURED CHARACTERS</h1>
		</div>
    </div>
    
	<div class="row who">
		<div  class="col-lg-2 col-sm-3" >
			<img src="supermanww.jpg">
			<div class='caption'>
          				<p>Superman</p>
        			  </div>
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="batmanww.jpg">
			<div class='caption'>
          				<p>Batman</p>
        			  </div>
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="wonderwomanww.jpg">
			<div class='caption'>
          				<p>Wonder Woman</p>
        			  </div>
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="greenlanternww.jpg">
			<div class='caption'>
          				<p>Green Lantern</p>
        			  </div>
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="theflashww.jpg">
			<div class='caption'>
          				<p>Flash</p>
        			  </div>
		</div>

		<div  class="col-lg-2 col-sm-3" >
			<img src="aquamanww.jpg">
			<div class='caption'>
          				<p>Aquaman</p>
        			  </div>
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
</html>