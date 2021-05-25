<?php 
require_once '../config/connect.php';
function select($data,$table,$condition){
$conn = db();
$selector = mysqli_query($conn,"SELECT"." ".$data." "."FROM"." ".$table." "."WHERE"." ".$condition);
//var_dump($selector);
$fetcher  = mysqli_fetch_array($selector);
return $fetcher;
}

