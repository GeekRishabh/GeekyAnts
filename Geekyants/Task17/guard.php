<?php
$email=$_POST['email'];
$password=$_POST['password'];
$stack = array();
array_push($stack,"$email","$password");
print_r($stack);
//$fromFile=$email.$password ;
//$stringFromFile = serialize($stack);
file_put_contents(“session-like.txt”, $stack);
//echo file_put_contents("user-input.txt","$stack");
//file_put_contents(file,data,mode,context)
