<?php
session_start();
//$conn = mysqli_connect("localhost","root","", "easy_recipe");
$conn =mysqli_connect("localhost:3306","BuddyGuy","TwrUgx6a","BuddyGuy");


// Set up debug mode
function debug_data() { // called in template to print arrays at top of any page.
 echo '<div id="debug" class="w3-container">';
 echo '<pre class="w3-container w3-third">SESSION is ';
 echo print_r($_SESSION);
 echo "</pre>";
 echo '<pre class="w3-container w3-third">POST is ';
 echo print_r($_POST);
 echo "</pre>";
 echo '<pre class="w3-container w3-third">GET is ';
 echo print_r($_GET);
 echo "</pre>";
 echo "</div>";
}

// debug_data(); // Comment this out to hide debug information

$headerImg=NULL;
if ($pageTitle == "Home")  {
	$headerImg =<<<HERE
		<header>
			<img class="img-fluid" src="images\hero5.svg" alt="collage of food images">
		</header>
HERE;
} else {
   $headerImg =<<<HERE
		<header>
			<img class="img-fluid" src="images\header.svg" alt=" part of food images collage ">
		</header>
HERE;
}

$loginButton =NULL;
if(isset ($_SESSION['userID'])){
   $loginButton = <<<HERE
		<form class="form-inline" action="logout.php" method="post">
			<button class="btn btn-primary btn-sm" name="logout" type="submit">Log Out</button>
		</form> 
HERE;
} else {
   $loginButton = <<<HERE
		<form class="form-inline" action="login.php" method="post" >
			<button class="btn btn-primary btn-sm" type="submit">Sign In </button>
		</form>
HERE;
}
?>