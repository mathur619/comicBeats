<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats|Home</title>
	<link rel="stylesheet" type="text/css" href="css\animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/adminfunction.css">
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
	<script type="text/javascript" src="js/admin.js"></script>
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
			<li><a href="#">Comics</a></li>
			<li><a href="#">Characters</a></li>
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
						echo fgets($myfile2); ?> 
		</div>
		<a href="addcharacter.php"><div class="option">Add Character</div></a>
		<a href="updatecharacter1.php"><div class="option"> Update Character</div></a>
		<a href="deletecharacter.php"><div class="option"> Delete Character</div></a>
		<a href="addcomic.php"><div class="option"> Add Comic</div></a>
		<a href="updatecomic1.php"><div class="option"> Update Comic</div></a>
		<a href="deletecomic.php"><div class="option"> Delete Comic</div></a>
		<a href="additem.php"><div class="option"> Add Item</div></a>
		<a href="updateitem1.php"><div class="option"> Update Item</div></a>
		<a href="deleteitem.php"><div class="option"> Delete Item</div></a>
		
		<a href="landingpage.php"><div class="option"> Logout</div></a>
	</div>

	<div class="admin">
	  <div class="content ">
		
		<h1>Add Character</h1>

        <form class="form-horizontal " action="admin.php" method="post">
       <div class="form-group">
    <label for="cname" class="col-sm-2 control-label">CName</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cname" name="fName" placeholder="Comic Name" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="rname" class="col-sm-2 control-label">RName</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" name="rName" placeholder="Real Name" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="Height" class="col-sm-2 control-label">Height</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Height" name="Height" placeholder="Height" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="Weight" class="col-sm-2 control-label">Weight</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Weight" name="username" placeholder="Weight" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="Occupation" class="col-sm-2 control-label">Occupation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Occupation" name="Occupation" placeholder="Occupation" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="BaseofOperation" class="col-sm-2 control-label">BOS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="BaseofOperation" name="BaseofOperation" placeholder="Base of Operation" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="Alingment" class="col-sm-2 control-label">Alingment</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Alingment" name="Alingment" placeholder="Alingment" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="FirstAppearance" class="col-sm-2 control-label"> FA</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="FirstAppearance" name="FirstAppearance" placeholder="First Appearance" required="required">
    </div>
  </div>
   
  <div class="form-group">
    <label for="fileToUpload" class="col-sm-2 control-label">Image</label>
    <div class="col-sm-10 btn btn-default  form-control" id="file">
      <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
  </div>

  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default add" value="Add Character"> 
    </div>
  </div>
</form>
	  

	  </div>
	</div>

</div>
</body>
</html>