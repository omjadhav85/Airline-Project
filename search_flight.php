<style>
table {
    width: 100%;
}

th{
   height: 50px;
  text-align:center;
  font-size: 15px;
  font-family: sans-serif;
    padding: 15px;
    text-align: left;
  background-color: #4CAF50;
color: white;
}

td {
  text-align:center;
  font-size: 15px;
  font-family: sans-serif;
    padding: 15px;
    text-align: left;

}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}

</style>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

body{
  background: url("images/plane.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}
.wrapper{
  width: 350px; padding: 20px;
  display: block;
  color: black;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family: sans-serif;
  //background-image: url("images/cssback.png");

}
</style>


</head>
<body>

<ul>
  <li><a class="active" href="website.php">Home</a></li>
  <li><a href="signup.html">Sign Up</a></li>
  <li><a href="admin.html">Admin</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
  <li style="float: left; color:white;font-family: sans-serif;font-size: 35px;">IndiGo</li>
</ul>


<?php

include 'config.php';
/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $source = $_POST["source"];
  $destination = $_POST["destination"];
  $departure = $_POST["departdate"];
  $trip = $_POST["trip"];
  if ($trip == 'return') {
    $arrival = $_POST["arrivedate"];
  }
  $adults = $_POST["adults"];
  $childrens = $_POST["childrens"];
  $trip_class = $_POST['travel_class'];
  $total_passengers = $adults + $childrens;

}
if($trip == 'oneway'){
$sql = "SELECT * FROM flights WHERE Source = '$source' AND Destination = '$destination' AND '$departure'>=Departure AND Available_seats>0 ";
$result = mysqli_query($conn,$sql);
}
else {
  $sql = "SELECT * FROM flights WHERE Source = '$source' AND Destination = '$destination' AND '$departure'>=Departure AND '$arrival'<=Arrival AND Available_seats>0 ";
  $result = mysqli_query($conn,$sql);
}

echo"<table border ='1'>";
echo "<tr><th>Id</th><th>Name</th><th>Source</th><th>Destination</th><th>Fare</th><th>Action</th></tr>";
if ($trip_class == 'economic') {

  if ($trip == 'oneway') {

  while ($row = mysqli_fetch_assoc($result)) {
    $price = $row['Fair_Economic']*$adults+0.5*$row['Fair_Economic']*$childrens;
    $id = $row['Id'];

  echo "<tr><td>{$row['Id']}</td><td>{$row['Name']}</td><td>{$row['Source']}</td><td>{$row['Destination']}</td><td>{$price}</td><td><form id= \"Passing\" method=\"post\" action=\"book_flight.php\">
<input name=\"Id\" type=\"hidden\" value=\"$id\">
<input name=\"price\" type=\"hidden\" value=\"$price\">
<input name=\"total_passengers\" type=\"hidden\" value=\"$total_passengers\">
<input name=\"submit\" type=\"submit\" value=\"Book\">
</form></td></tr>";

    }

  }
  else {
    while ($row = mysqli_fetch_assoc($result)) {
      $price_temp = $row['Fair_Economic']*$adults+0.5*$row['Fair_Economic']*$childrens;
      $price = $price_temp*2;
      $id = $row['Id'];

    echo "<tr><td>{$row['Id']}</td><td>{$row['Name']}</td><td>{$row['Source']}</td><td>{$row['Destination']}</td><td>{$price}</td><td><form id= \"Passing\" method=\"post\" action=\"book_flight.php\">
  <input name=\"Id\" type=\"hidden\" value=\"$id\">
  <input name=\"price\" type=\"hidden\" value=\"$price\">
  <input name=\"total_passengers\" type=\"hidden\" value=\"$total_passengers\">
  <input name=\"submit\" type=\"submit\" value=\"Book\">
  </form></td></tr>";

      }

  }
}
else {

  if ($trip == 'oneway') {

  while ($row = mysqli_fetch_assoc($result)) {
    $price = $row['Fair_Business']*$adults+0.5*$row['Fair_Business']*$childrens;
    $id = $row['Id'];
    echo "<tr><td>{$row['Id']}</td><td>{$row['Name']}</td><td>{$row['Source']}</td><td>{$row['Destination']}</td><td>{$price}</td><td><form id= \"Passing\" method=\"post\" action=\"book_flight.php\">
  <input name=\"Id\" type=\"hidden\" value=\"$id\">
  <input name=\"price\" type=\"hidden\" value=\"$price\">
  <input name=\"total_passengers\" type=\"hidden\" value=\"$total_passengers\">
  <input name=\"submit\" type=\"submit\" value=\"Book\">
  </form></td></tr>";
    }
  }
  else {
    while ($row = mysqli_fetch_assoc($result)) {
      $price_temp = $row['Fair_Business']*$adults+0.5*$row['Fair_Business']*$childrens;
      $price = $price_temp*2;
      $id = $row['Id'];
      echo "<tr><td>{$row['Id']}</td><td>{$row['Name']}</td><td>{$row['Source']}</td><td>{$row['Destination']}</td><td>{$price}</td><td><form id= \"Passing\" method=\"post\" action=\"book_flight.php\">
    <input name=\"Id\" type=\"hidden\" value=\"$id\">
    <input name=\"price\" type=\"hidden\" value=\"$price\">
    <input name=\"total_passengers\" type=\"hidden\" value=\"$total_passengers\">
    <input name=\"submit\" type=\"submit\" value=\"Book\">
    </form></td></tr>";
      }
  }
}
echo "</table>";

mysqli_close($conn);

 ?>

</body>
</html>
