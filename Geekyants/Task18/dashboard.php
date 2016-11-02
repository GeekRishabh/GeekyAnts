<?php
session_start();
if(isset($_SESSION['user_id']))
{
  $conn = mysqli_connect("localhost", "root", "goldtree9", "training");
  $query="select * from users where id='$SESSION['user_id']';";
	$result=mysqli_query($conn,$query);
  $ans=mysqli_fetch_assoc($result);
     echo $ans['id'];
     echo "<br/><a href="logout.php">Logout</a>";
}
else {
       header('location:login.php');
}
