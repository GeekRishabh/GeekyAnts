<?php
session_start();
 $item=$_POST['item'];
//echo $item;
//$condition = "False";
array_push($_SESSION['todoCollection'],[1] => Array(['caption' => $item ,'isCompleted' => 0]));
print_r(array_values($_SESSION['todoCollection'])) ;

?>
