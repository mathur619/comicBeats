<!DOCTYPE html>
<html>
<head>
	<title>ComicBeats|Home</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:700i,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css\comichomepage_copy1.css">
	<script type="text/javascript" src="js\comichomepage.js"></script>
</head>
<body>
<div id="div1">
	<h1 id="hfirst">ComicBeats</h1>
</div>
<hr id="hr1">
<div id="div2">
<img  id="logo" src="D:\Downloads\comicbeatslogo.jpg" alt="Home" title="Home">
	<ul>
		<li class="list1"> <a href="comichomepage.html">HOME</a></a></li>
		<li class="list1"><a href="characters.html">CHARACTER</a></li>
		<li class="list1"><a href="comic.html">COMIC</a></li>
		<li class="list1"> <a href="tv.html">TV</a></a></li>
		<li class="list1"><a href="movies.html">MOVIES</a></li>
		<li class="list1"><a href="news.html">NEWS</a></li>
		<li class="list1"><a href="art.html">ART</a></li>
		<li class="list1"><a href="store.html">STORE</a></li>
		<span id="span1">

		<li> <input type="text" name="search" placeholder="search..." id="search"></li>
		<li> <img src="D:\Downloads\searchlogo.png" id="searchlogo"></li>
		</span>
	</ul>
	<hr>
</div>




<link rel="stylesheet" type="text/css" href="image.css">
<?php
$conn=mysqli_connect("localhost","root","mathur619","character") or die("connection unsuccessful!");

$character=$_POST['Character'];
$q=mysqli_query($conn,"select * from characterInfo where ComicName='$character' ") or die("quey unsuccessful!");

$result=mysqli_fetch_array($q);

// echo "Name:".$result['name'].$result['img'];
$image=$result['Image'];

echo "<div class='superdiv'> ";
echo "<div class='subdiv'> ";
$myfile = fopen("$character.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("$character.txt"));
fclose($myfile);
echo "</div>";
echo "</div>";
echo "<div class='imgdiv'>";
echo "<img class= 'image' src=$image/>";
echo "</div>";

?>

