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

<?php

$id = $_POST['Id'];
$price = $_POST['price'];
$total_passengers = $_POST['total_passengers'];


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
<form action="update.php" method="post">
  <input type="hidden" name="flight_id" value="<?php echo "$id"?>"></input>
  <input type="hidden" name="price" value="<?php echo "$price"?>"></input>
  <input type="hidden" name="total_passengers" value="<?php echo "$total_passengers"?>"></input>

  First Name:  <input type="text" name="firstname" required></input><br><br>
  Last Name:   <input type="text" name="lastname" required ></input><br><br>
  Mobile No: <input type="number" maxlength="10" name="mob_no" required></input><br><br>
  Email Id:  <input type="email" placeholder="Enter email..." name="email" required></input><br><br>

  <input type="submit" value="Book Flight"></input>


</form>
</div>









</body>
</html>
