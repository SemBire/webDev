
<?php
$connect = mysqli_connect("localhost:3306", "BuddyGuy", "TwrUgx6a", "BuddyGuy");
$query = "SELECT * FROM user_table ORDER BY userID DESC";
$result = mysqli_query($connect, $query);

?>

<html>  
 <head>  
          <title>Table Data Edit Delete</title>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
    </head>  
    <body>  
  <div class="container">  
  
   
            <div class="table-responsive">  
    <h3 align="center"> Table Data Edit Delete </h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th>
	   <th>Nick Name</th>
       <th>User Name</th>
	   <th>Email</th>
	   <th>Password</th>
	   <th>Avatar</th>
     
	 </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["userID"].'</td>
       <td>'.$row["firstname"].'</td>
       <td>'.$row["lastname"].'</td>
	   <td>'.$row["nickname"].'</td>
       <td>'.$row["username"].'</td>
	   <td>'.$row["email"].'</td>
       <td>'.$row["password"].'</td>
	   <td>'.$row["avatar"].'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "userID"],
       editable:[[1, 'firstname'], [2, 'lastname'],  [3, 'nickname'],  [4, 'username'],  [5, 'email'],  [6, 'password'],  [7, 'avatar']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.userID).remove();
       }
      }
     });
 
});  
 </script>

