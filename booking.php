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
  <li><a href="#login">Login</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
  <li style="float: left; color:white;font-family: sans-serif;font-size: 35px;">IndiGo</li>
</ul>
