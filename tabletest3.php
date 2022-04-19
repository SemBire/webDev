<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin:50px;">
  <h1>Dashboard Table</h1>
  <br>
  <table class="table">
      <thead>
          <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Nick Name</th>
          <th>User Name</th>
          <th>Email</th>
         <th>Avatar</th>
         <th>Action</th>
        
      </tr>
        </thead>
    
        
        <tbody>
          <?php

$servername = "localhost:3306";
$username = "BuddyGuy";
$password = "TwrUgx6a";
$database = "BuddyGuy";

$connection = new mysqli($servername,$username,$password, $database);

if (!$connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM user_table";
$result = $connection->query($sql);

if (!$result) {
  die("Invalid query:". $connection->error);
}

while($row = $result->fetch_assoc())
{

 echo "<tr>
       <td>".$row["userID"]. "</td>
       <td>".$row["firstname"]. "</td>
       <td>".$row["lastname"]. "</td>
	 <td>".$row["nickname"]. "</td>
       <td>".$row["username"]. "</td>
	 <td>".$row["email"]. "</td>
	 <td>".$row["avatar"]. "</td>
       <td>
       <a  class='btn btn-primary btn-sm'  href='update'>Update</a>
       <a class='btn btn-danger btn-sm' herf='delete'>Delete</a>
       </td>

      </tr>";
}

        
      ?>


        </tbody>
  </table>
</body>
</html>