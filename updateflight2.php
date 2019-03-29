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
  p{
    font-size: 20px;
    font-family: sans-serif;
  }

  input[type=text],[type=number],[type=email],[type=date],[type = password],select{
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

  <?php
   $flight_id= $_POST['id'];
    include 'config.php';
  $test = "SELECT * FROM flights WHERE Id = $flight_id";
  $result = mysqli_query($conn,$test);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //$active = $row['active'];

  $count = mysqli_num_rows($result);


if ($count == 0) {
  $error = "Flight ID NOT FOUND!!!<br><br>";
  echo $error;
  header("Refresh:2; url=updateflight.html");
}
else{
  $sql= "SELECT Name,Source,Destination,Departure,Arrival,Fair_Economic,Fair_Business  FROM flights WHERE Id = $flight_id";
  $res=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res);
  mysqli_close($conn);
}
   ?>

  <ul>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="welcome.php">Home</a></li>
    <li><a  href="addflight.html">Add Flight</a></li>
    <li><a href="deleteflight.html">Delete Flight</a></li>
    <li><a class="active" href="updateflight.html">Update Flight</a></li>
    <li><a href="cancelbooking.html">Cancel Booking</a></li>
    <li style="float: left; color:white;font-family: sans-serif;font-size: 35px;">IndiGo</li>
  </ul>


  <div class="wrapper">
    <form action="updateflight3.php" method="post">
      <input name="id" type="hidden" value="<?php echo"$flight_id" ?>">

      Flight Name:   <input type="text" name="name" value="<?php echo $row['Name']; ?>" required ></input><br><br>
      Source <input type="text" name="source" value="<?php echo $row['Source']; ?>" required></input><br><br>
      Destination:  <input type="text"  name="destination" value="<?php echo $row['Destination']; ?>"required></input><br><br>
      Departure:  <input type="date"  name="departure" value="<?php echo $row['Departure']; ?>"required></input><br><br>
      Arrival:  <input type="date"  name="arrival" value="<?php echo $row['Arrival']; ?>" required></input><br><br>
      Economic Fair:  <input type="number"  name="Fair_Economic" value="<?php echo $row['Fair_Economic']; ?>" required></input><br><br>
      Business Fair:  <input type="number"  name="Fair_Business" value="<?php echo $row['Fair_Business']; ?>" required></input><br><br>

      <input type="submit" value="Update Flight"></input>



    </form>
  </div>


</body>
</html>
