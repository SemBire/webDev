
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="margin: 50px;">
    <h1>Dashboard</h1>
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
            

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM user_table";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row

			while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["userID"]. "</td>
                <td>".$row["firstname"]. "</td>
                <td>".$row["lastname"]. "</td>
                <td>".$row["nickname"]. "</td>
                <td>".$row["username"]. "</td>
                <td>".$row["email"]. "</td>
                <td>".$row["avatar"]. "</td>
                <td>
                       <a class='btn btn-primary btn-sm' href='updated.php?userID=".$row["userID"]. "'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?userID=".$row["userID"]. "'>Delete</a>
                    </td>
                </tr>";
            }

            $connection->close();



            ?>
        </tbody>
    </table>
</body>
</html>