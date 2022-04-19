<?php
include'config.php';
if(isset($_GET['userID'])){
    $userID=$_GET['userID'];

    $sql="DELETE FROM `user_table` WHERE  `userID`='$userID'";
    $result=$conn->query($sql);
    if($result== TRUE){
        echo "Deleted successfully";

    }else{
        echo"Error:". $sql ."<br>" .$conn->error;
    }
}
?>