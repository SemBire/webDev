<?php
include "config.php";
if(isset($_POST['update'])){
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
 if(isset ($_GET['id'])){
     $userID = $_GET['id'];
     $sql = "SELECT *FROM 'user_table' WHERE 'id'=$userID";
     $result = $conn->query($sql);

      if($result->num_rows >0){
          while($row = $result->fetch_assoc()){
            $firstname = $row['firstname'];
            $lastname =  $row['lastname'];
            $username =$row['username'];
            $nickname= $row['nickname'];
            $email =$row ['email'];
            $image_name = $row ['avatar'];
            $userID = $row ['userID'];
          }
          ?>
          
                  <html>
                  <body>
          <h2> User Update Form</h2>
          <form action="" method="post">
              <fieldset>
                  <legend> Personal informstion:
                  </legend>
                  First name:<br>
                  <input type="text" name="firstname" value="<?php echo $firstname;?>">
                  Last name:<br>
                  <input type="text" name="lastname" value="<?php echo $lasttname;?>">
                  User name:<br>
                  <input type="text" name="username" value="<?php echo $username;?>">
                  Nick name:<br>
                  <input type="text" name="nickname" value="<?php echo $nickname;?>">
                  Email:<br>
                  <input type="email" name="email" value="<?php echo $email;?>">
                  Avatar Image:<br>
                  <input type="image" name="avatar" value="<?php echo $image_name;?>">
                  <input type="submit" value="Update" name="update">
            
                </fieldset>
                  </form>
                  
                  </body>
                  </html>

        <?php
 }else{
     header('Location: tabletest4.php');
 }
 }

 ?>