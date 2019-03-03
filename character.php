<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
	<link rel="stylesheet" type="text/css" href="css/comic.css">
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

<div class="main">
	<div class="one">
		<h2>Choose filters:</h2>
		<form action="character.php" method="post">
			<button class="btn btn-primary" name="filter" value="1"> Alphabatically<br> Comic Name</button>
		</form>
		<form action="character.php" method="post">
			<button class="btn btn-primary" name="filter" value="2"> Alphabatically<br> Real Name</button>
		</form>
		<form action="character.php" method="post">
			<button class="btn btn-primary" name="filter" value="3"> Alignment</button>
		</form>
		<form action="character.php" method="post">
			<button class="btn btn-primary" name="filter" value="4"> First Appearance </button>
		</form>
		
	</div>

	<div class="two">
		
	
<?php
	$host="localhost";
	$user="root";
	$pass="mathur619";
	$dbname="character";

	$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");
	$choice=$_POST['filter'] or die("First Choose the filter:");
	 if(1){

		switch($choice){
		case 1:{
				$q=mysqli_query($conn,"select ComicName,Image from characterinfo order by ComicName");
				while($r=mysqli_fetch_array($q)){
				$name=$r['ComicName'];
				$image=$r['Image'];
				echo "
				<form action='particularcharacter.php' method='post'>
				<button class='comicbutton' value=$name name='characterbutton' id='characterbutton'>
				<img class ='comicimage' src= $image height='500' width='350'> <br><h4>$name</h4>
				</button> 
				</form>";
				}
				break;
			}
		case 2:{
				$q=mysqli_query($conn,"select ComicName,RealName,Image from characterinfo order by RealName");
				while($r=mysqli_fetch_array($q)){
				$name=$r['ComicName'];
				$image=$r['Image'];
				$RealName=$r['RealName'];
				echo "
				<form action='particularcharacter.php' method='post'>
				<button class='comicbutton' value=$name name='characterbutton' id='characterbutton'>
				<img class ='comicimage' src= $image height='500' width='350'> <br><h4> $RealName </h4>
				</button> 
				</form>";
				}
				break;
			}
		case 3:{
				$q=mysqli_query($conn,"select ComicName,Alignment,Image from characterinfo order by Alignment");
				while($r=mysqli_fetch_array($q)){
				$name=$r['ComicName'];
				$image=$r['Image'];
				$Alignment=$r['Alignment'];
				echo "
				<form action='particularcharacter.php' method='post'>
				<button class='comicbutton' value=$name name='characterbutton' id='characterbutton'>
				<img class ='comicimage' src= $image height='500' width='350'> <br><h4>$name - $Alignment</h4>
				</button> 
				</form>";
				}
				break;
			}
		case 4:{
				$q=mysqli_query($conn,"select ComicName,FirstAppearance,Image from characterinfo order by FirstAppearance");
				while($r=mysqli_fetch_array($q)){
				$name=$r['ComicName'];
				$image=$r['Image'];
				$FirstAppearance=$r['FirstAppearance'];
				echo "
				<form action='particularcharacter.php' method='post'>
				<button class='comicbutton' value=$name name='characterbutton' id='characterbutton'>
				<img class ='comicimage' src= $image height='500' width='350'> <br><h4>$name - $FirstAppearance</h4>
				</button> 
				</form>";
				}
				break;
			}
		
		}

	}

?>
</div>
</div>
</body>
</html>