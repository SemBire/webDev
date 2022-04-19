<?php
include "config.php";
 $userID = NULL;
$firstname = NULL;
$lastname = NULL;
$nickname =NULL; 
$username = NULL;
$role=NULL;
$email = NULL;
$password = NULL;



if(isset($_POST['submit'])) {
        $firstname = $_POST ['firstname'];
		$lastname =  $_POST['lastname'];
		$username =$_POST['username'];
		$nickname= $_POST['nickname'];
		$email =$_POST ['email'];
		$image_name = $_POST ['avatar'];
 
        $sql="UPDATE `user_table` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email' WHERE `userID`= $userID;";
        $result =$conn->query($sql);
    if ($result == TRUE) {
	    echo "Record Updated Succesfully";
}
    else{
        echo "Error:". $sql . "<br>" . $conn-> error;
    }
}
 if(isset ($_GET['userID'])){
     $userID = $_GET['userID'];
     $sql = "SELECT *FROM 'user_table' WHERE 'userID'=$userID";
     $result = $conn->query($sql);

      if($result->num_rows >0){
          while($row = $result->fetch_assoc()){
            $firstname = $row['firstname'];
            $lastname =  $row['lastname'];
            $username =$row['username'];
            $nickname= $row['nickname'];
            $email =$row ['email'];
            $avatar = $row ['avatar'];
            $userID = $row ['userID'];
          }
         
 $pageContent .= <<<HERE
                 <h2> User Update Form</h2>
			      <form action="" method="post">
				  <fieldset>
					  <legend> Personal information:
					  </legend>
					  First name:<br>
					  <input type="text" name="firstname" value="$firstname">
					  Last name:<br>
					  <input type="text" name="lastname" value="$firstname">
					  User name:<br>
					  <input type="text" name="username" value="$nickname">
					  Nick name:<br>
					  <input type="text" name="nickname" value="$username ">
					  Email:<br>
					  <input type="email" name="email" value="  $email">
					  Avatar Image:<br>
					  <input type="image" name="avatar" value="$avatar ">
					  <input type="submit" value="Update" name="update">
				
					</fieldset>
					  </form>
					  
					  </body>
					 HERE;
	}else{
		$pageContent .=<<<HERE
		 header('Location: tabletest4.php');
	 HERE;
	 }
	 
	 include_once 'template.php';
 ?>