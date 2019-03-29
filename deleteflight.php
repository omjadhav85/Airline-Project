<<?php

include 'config.php';

$id = $_POST['id'];

$sql1 = "DELETE FROM users WHERE Flight_Id = $id";
$sql2 = "DELETE FROM flights WHERE Id = $id";



if((!mysqli_query($conn,$sql1)) or (!mysqli_query($conn,$sql2)) ){
  echo "Not Deleted!!!";
}
else {
  echo "Flight Deleted!!!";

}


header("Refresh:2; url=welcome.php");

mysqli_close($conn);



 ?>
