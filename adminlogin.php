<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: tableTest2.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}


$pageContent .= <<<HERE
	<section class="container">
	$message
	<form action ="adminlogin.php" method ="post">
		<div class="form-group">
		<label> adminname </label>
		<input type="text" class="form-control" id="adminname" name="adminname" value="$adminname" required/>
		 
		</div>
		<div class="form-group">
		<label> Password </label>
		<input type="password" class="form-control" id="password" name="password" required/>
		</div>
		<input class="btn btn-secondary btn-lg" type="submit" name="login" value="login"/>
	</form>
	</section>
HERE;



include_once 'template.php';

?>