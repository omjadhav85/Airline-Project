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

$sql = "UPDATE flights SET Name='$name',Source='$source',Destination='$destination',Departure='$departure',Arrival='$arrival',Fair_Economic='$fair_economic',Fair_Business='$fair_business' WHERE Id = $id";



if((!mysqli_query($conn,$sql))){
  echo "Not Updated!!!";
}
else {
  echo "Flight Updated Successfully!!!";

}

header("Refresh:2; url=updateflight.html");

mysqli_close($conn);



 ?>
