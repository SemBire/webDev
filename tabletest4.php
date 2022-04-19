<?php

include 'config.php';

            
			$pageTitle = "Admin Dashboard";
			$pageContent=NULL;
			$userID = NULL;
			$firstname = NULL;
			$lastname = NULL;
			$nickname =NULL; 
			$username = NULL;
			$role=NULL;
			$email = NULL;
			$avatar = NULL;
						

			// Create connection
			

            // Check connection
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM user_table";
			$result = $conn->query($sql);

            if (!$result) {
				die("Invalid query: " . $conn->error);
			}while($row = $result->fetch_assoc()) {
                $userID = $row ['userID'];
                $firstname = $row ['firstname'];
                $lastname = $row ['lastname'];
				$username = $row ['username'];
				$nickname= $row ['nickname'];
				$email = $row ['email'];
				$image_name = $row ['avatar'];
            }

            $conn->close();
			
			
			$pageContent .= <<<HERE
    <section class="container">
    <h1>Amin Dashboard</h1>
    <br>
    <table class="table">
        <thead>
		<tr>
         <th>userID</th>
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
		<tr>
                <td> $userID</td>
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$nickname</td>
                <td>$username</td>
                <td>$email</td>
                <td>$avatar</td>
                <td>
                        <a class='btn btn-primary btn-sm' href='updated.php?userID=$userID'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?userID=$userID'>Delete</a>
                    </td>
                </tr>
        </tbody>
    </table>
</section>\n
HERE;



include_once 'template.php';
 ?>