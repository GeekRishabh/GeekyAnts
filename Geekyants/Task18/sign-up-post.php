<?php
// insert data to database and if successful redirect to login.php
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$servername="localhost";
$conn = mysqli_connect($servername,"root", "goldtree9", "training");
$sql = "INSERT INTO users (name,email,username,password) VALUES ('$name', '$email', '$username','$password')";
if(mysqli_query($conn, $sql))
{
header('Location:login.php');
}
else {
  header('location:signup.php');
}
mysqli_close($conn);
