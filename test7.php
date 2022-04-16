 if($row['user_type']!="normaluser")
{
  echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
  echo ' ';
  echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
}