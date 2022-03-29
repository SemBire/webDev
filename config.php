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

debug_data(); // Comment this out to hide debug information

?>