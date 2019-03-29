<?php
include 'config.php';

$name = $_POST['name'];
$mob_no = $_POST['mob_no'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback(Name, Contact, Email, Message) VALUES ('$name','$mob_no','$email','$feedback')";

$result = mysqli_query($conn,$sql);

echo "Response Saved";

mysqli_close($conn);

header("Refresh:2; url=website.php");

?>
