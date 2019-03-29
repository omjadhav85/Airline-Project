<<?php

include 'config.php';

$id = $_POST['id'];
$test = "SELECT * FROM users WHERE UserId = $id";
$result = mysqli_query($conn,$test);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];

$count = mysqli_num_rows($result);


if ($count == 0) {
$error = "Flight ID NOT FOUND!!!<br><br>";
echo $error;
header("Refresh:2; url=cancelbooking.html");
}
else{
$sql = "DELETE FROM users WHERE UserId = $id";



if((!mysqli_query($conn,$sql))){
  echo "Not Canceled!!!";
}
else {
  $temp = $row['Flight_Id'];
  $sql1 = "SELECT * FROM flights WHERE Id = $temp";
  $result = mysqli_query($conn,$sql1);
  $row2 = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $updated_seats = $row2['Available_seats']+$row['Seats_booked'];


  $sql2 = "UPDATE flights SET Available_seats='$updated_seats' WHERE Id = $temp";
  mysqli_query($conn,$sql2);

  echo "Flight Canceled Successfully!!!";

}

header("Refresh:2; url=welcome.php");

mysqli_close($conn);

}

 ?>
