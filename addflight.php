<<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];
$fair_economic = $_POST['Fair_Economic'];
$fair_business = $_POST['Fair_Business'];
$Available_seats = $_POST['Available_seats'];

$sql = "INSERT INTO flights(Id, Name, Source, Destination, Departure, Arrival, Fair_Economic, Fair_Business, Available_seats) VALUES ('$id', '$name', '$source', '$destination', '$departure', '$arrival', '$fair_economic', '$fair_business', '$Available_seats')";



if((!mysqli_query($conn,$sql))){
  echo "Not Added!!!";
}
else {
  echo "Flight Added!!!";

}

$sql1 = "INSERT IGNORE INTO cities (Name) VALUES('$source')";
$sql2 = "INSERT IGNORE INTO cities (Name) VALUES('$destination')";
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);

header("Refresh:2; url=welcome.php");

mysqli_close($conn);



 ?>
