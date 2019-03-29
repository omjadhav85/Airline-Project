<<?php
include 'config.php';
$sql = "SELECT * FROM cities";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql);


 ?>


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
      margin: 0 auto;
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
input[type=text],[type=number],[type=email],[type=date],select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
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
<div class="wrapper">
<form action="search_flight.php" method="post">
  <input onclick="document.getElementById('arrive').disabled = true;" type="radio" name="trip" value="oneway" id="oneway"> One way
  <input onclick="document.getElementById('arrive').disabled = false;"type="radio" name="trip" value="return" id="return"> Return<br><br>
  Source:
  <select name="source">
    <?php
    while ($row = mysqli_fetch_array($result))
    {
        echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
    }
    ?>
  </select><br><br>
  Destination:
  <select name="destination">
    <?php
    while ($test = mysqli_fetch_array($result2))
    {
        echo "<option value='".$test['Name']."'>".$test['Name']."</option>";
    }
    ?>
  </select><br><br>

  Departure: <input type="date" name="departdate" id="dept" required></input><br><br>
  Arrival:   <input type="date" name="arrivedate" id="arrive" required></input><br><br>
  Adults: <input type="number" min="0" name="adults"></input><br><br>
  Childrens: <input type="number" min="0" name="childrens" placeholder="Above 3yrs"></input><br><br>
  Class:   <select name="travel_class">
      <option value="economic">Economic</option>
      <option value="business">Business</option>
    </select><br><br>

  <input type="submit" value="Search Flights"></input>


</form>
</div>
</body>
</html>
