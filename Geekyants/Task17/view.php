<?php
$stringFromFile = file_get_contents(“session-like.txt”)
$fromFile = unserialize($stringFromFile);
 
//$fromFile[‘x’] = ‘something’;
print_r(array_values($fromFile));
