<!DOCTYPE html>
<html>
<head>


	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/usersagain.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
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

<div class="side">
	<div id="account"> 

		<i class="fas fa-user"></i>
	<?php $myfile2=fopen("username.txt",'r') or die ('unable to open file');
						echo fgets($myfile2); ?> </div>

	<a href="account.php"><div class="option"> My Account</div></a>
	<a href="wallet.php"><div class="option"> Wallet</div></a>
	<a href="orders.php"><div class="option"> My Orders</div></a>
	<a href="landingpage.php"><div class="option"> Logout</div></a>
</div>

<?php
	$host="localhost";
	$user="root";
	$pass="mathur619";
	$dbname="character";

	$conn=mysqli_connect($host,$user,$pass,$dbname) or die("connection unsuccessful!");

	$q=mysqli_query($conn,"select * from useraccount where userid =(select userid from users where login=1)");
	$q2=mysqli_query($conn,"select * from users where userid=(select userid from users where login=1)");
	$r=mysqli_fetch_array($q);
	$r2=mysqli_fetch_array($q2);
	$accno=$r['account_no'];
	$mobile=$r['mobile'];
	$house_no=$r['house_no'];
	$street=$r['street'];
	$city=$r['city'];
	$state=$r['state'];
	$pincode=$r['pincode'];
	$username=$r2['username'];
	if($accno!=NULL){
		echo "<div class='admin'>
				<h2> Account Number : $accno</h2>
				<h2> Username: $username</h2>
				<h2> Mobile : $mobile</h2>
				<h2> House Number : $house_no</h2>
				<h2> Street : $street</h2>
				<h2> City  : $city</h2>
				<h2> State  : $state </h2> 
				<h2> Pincode  : $pincode</h2>
				
			</div>";
	}
	else{
		echo '
		<div class="admin">
		<h1> You have no acoount! </h1>
			<div class="container wow fadeInUp ">
		<h1 id="addaccount">Add Account</h1>

        <form class="form-horizontal" action="addaccount.php" method="post">
       <div class="form-group">
    <label for="AccountNumber" class="col-sm-2 control-label">Account Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="AccountNumber" name="AccountNumber" placeholder="AccountNumber" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="Mobile" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="HouseNumber" class="col-sm-2 control-label">House Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="HouseNumber" name="HouseNumber" placeholder="House Number" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="Street" class="col-sm-2 control-label">Street</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Street" name="Street" placeholder="Street" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="City" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="City" name="City" placeholder="City" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="State" class="col-sm-2 control-label">State</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="State" name="State" placeholder="State" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="Pincode" class="col-sm-2 control-label">Pincode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="Pincode" required="required">
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" value="Add Account"> 
    </div>
  </div>
</form>
</div>
</div>';
				
	}
?>
</div>
</body>
</html>