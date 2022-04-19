<?php 
function auth_user($authUser){
if($_SESSION['RoleValue']< $authUser){
	header(Location: /profile.php?disallow");
	exit;
}
	
}
functiom auth_admin($authadmin){
	if($_SESSION['RoleValue']>=$authadmin){
		return TRUE;
	} else{
		return FALSE;
	}

}
function getUsername($userID,$conn){
	$sql="SELECT `firstname` FROM `user_table` WHERE `userID`=$userID;";
	$result= mysqli_query($conn,$sql) or die("There was a problem accessing the name of the user.");
	$profile=mysql-fetch_array($result);
	$firstname=$profile['firstname'];
	return $firstname;
}


?>

