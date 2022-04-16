<?php  
//action.php
$connect = mysqli_connect('localhost:3306', 'BuddyGuy', 'TwrUgx6a', 'BuddyGuy');

$input = filter_input_array(INPUT_POST);

$firstname = mysqli_real_escape_string($connect, $input["firstname"]);
$lastname = mysqli_real_escape_string($connect, $input["lastname"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE user_table 
 SET firstname = '".$firstname."', 
 lastname = '".$lastname."' 
 WHERE userID = '".$input["userID"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM user_table 
 WHERE userID = '".$input["userID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
