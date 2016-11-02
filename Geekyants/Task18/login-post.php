<?php
session_start();
$email=$_POST['email'];
$password=md5($_POST['password']);
$servername="localhost";
$conn = mysqli_connect($servername,"root", "goldtree9", "training");
$query="select * from users where email='$email'
					and password='$password';";
// echo $query;
	$result=mysqli_query($conn,$query);
   echo $reult;
  $ans=mysqli_fetch_assoc($result);
	echo $ans['id']; //Array $ans

 if($ans['id'])
	 {

     $_SESSION['user_id']=$ans['id'];  //not able to create session into the web browser see to it //
      header('location:dashboard.php');

	 }
	 else
	 {

	 	header('location:login.php');

	 }
