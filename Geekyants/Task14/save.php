<?php

$name=$_POST['name'];

//$myfile = fopen("user-input.txt", "w") or die("Unable to open file!");
//fwrite($myfile, $name);
//fclose($myfile);
echo file_put_contents("user-input.txt","$name");

//file_put_contents(file,data,mode,context)

?>