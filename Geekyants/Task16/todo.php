<?php
session_start();
if(!isset($_SESSION['todoCollection']))
	$_SESSION['todoCollection'] = array();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>to do App</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="http://eg.com/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="jquery.js"></script>
    <script src="model.js"></script>
    <script src="view.js"></script>
    <script src="controller.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="container">
    <div class="jumbotron">
      <form id="form" method="post" action ="storeitem.php">
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
