<?php
session_start();
$conn = mysqli_connect("localhost","root","", "easy_recipe");
//$conn =mysqli_connect("localhost:3306","BuddyGuy","TwrUgx6a","BuddyGuy");
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

//debug_data(); // Comment this out to hide debug information

require_once '../../scripts/webdev_config.php';
date_default_timezone_set('America/Chicago');
mysqli_set_charset($conn, "utf8");
mysqli_set_charset($conn_select, "utf8");

if (isset($_SESSION ['meberID'])){
	$memberName = $_SESSION['FirstName'] . "&nbsp;" . $_SESSION['LastName'];
	$memmberID = $_SESSION['memmberID'];
	$institutionID = $_SESSION['institutionID'];
	$programID = $_SESSION['programID'];
	$RoleValue = $_SESSION['RoleValue'];
	$RoleName = $_SESSION['RoleName'];
	

?>