<!DOCTYPE html>
<html>
<head>

	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css\animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/usersagain.css">
	<link rel="stylesheet" type="text/css" href="css/editprofile.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script src="js/wow.min.js"></script>
		<script>
  			new WOW().init();
  		</script>

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

  <div class="side">
	<div id="account"> 

		<i class="fas fa-user"></i>
	<?php $myfile2=fopen("username.txt",'r') or die ('unable to open file');
						echo fgets($myfile2); ?> </div>
	<a href="editprofile.php"><div class="option"> Edit Profile</div></a>
	<a href="changepassword.php"><div class="option"> Change Password</div></a>
	<a href="wallet.php"><div class="option"> Wallet</div></a>
	<a href="orders.php"><div class="option"> My Orders</div></a>
	<a href="landingpage.php"><div class="option"> Logout</div></a>
	
  </div>

  <div class="otherside container">
	<?php 
$host="localhost";
$user="root";
$pass="mathur619";
$dbname="character";

$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");
$q=mysqli_query($conn,"select * from users where login=1");

// $myfile=fopen("username.txt",'r') or die("unable to open file");
// $username=fgets($myfile);
// $password=fgets($myfile);
// echo $username;
// $name=$username;
//  $response =mysqli_query($conn,"select fname from users where username ='$username' ")
// 					or die(mysqli_error($conn));
// 					$r=mysqli_fetch_array($response);
// 					echo $r;

 $row = mysqli_fetch_array($q);
 $fname=$row['fname'];
 $lname=$row['lname'];
 $email=$row['email'];
 $username=$row['username'];

 echo "
 		
		<h1>Edit Info</h1>

       
  <div class='form-group'>
    <label for='cpassword' class='col-sm-2 control-label'> Current Password</label>
    <div class='col-sm-10'>
      <input type='text' class='form-control' id='cpassword' name='cpassword' placeholder='Current Password' required='required' >
    </div>
  </div>
<br><br><br>
  <div class='form-group'>
    <label for='npassword' class='col-sm-2 control-label'> New Password</label>
    <div class='col-sm-10'>
      <input type='text' class='form-control' id='npassword' name='npassword' placeholder='New Password' required='required' >
    </div>
  </div>

  <div class='form-group'>
    <div class='col-sm-offset-2 col-sm-10'>
      <input type='submit' class='btn btn-default' value='Change Password'> 
    </div>
  </div>
</form>

 ";
 
?>
  </div >
</div>
</body>
</html>