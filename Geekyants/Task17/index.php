<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>to do App</title>

  </head>
  <body class="container">
    <div class="jumbotron">
      <form id="form" method="post" action ="index.php">
        <div class="row">
      		<div class="col-md-8"><input type="text" class="form-control" name="item" id="item" placeholder="Enter Task Todo "></div>
      		<div class="col-md-4"><input type="submit" value="Add" class="btn btn-primary" id="add" ></div>
      	</div>
      </form>
    </div>
    <div class="col-md-4">
  		<ul class="list-group" id="dataItems">
  		</ul>
  	</div>
  </body>
</html>


<?php
session_start();
if(!isset($_SESSION['todoCollection']))
{
  $_SESSION['todoCollection'] = array();
}
$caption=$_POST['item'];
array_push($_SESSION['todoCollection'], ['caption' => $caption,'isCompleted' => 0]);
var_dump($_SESSION);
// $i=sizeof($_SESSION['todoCollection']);
$ser= serialize($_SESSION['todoCollection']);
echo $ser;
echo file_put_contents("user-input.txt","$ser");
$myfile = fopen("file.txt", "w") or die("Unable to open file!");
fwrite($myfile, $ser);
fclose($myfile);
//
 for($j=0;$j<$i ;$j++) {
//   //print_r($_SESSION['todoCollection'][$j]['caption']);

//    echo $ser;
 echo "<li>" .$_SESSION['todoCollection'][$j]['caption']. "<button name='btn'>remove</button></li><br>";
  }




?>
