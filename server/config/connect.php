<?php 
function db (){
# DB PARAMS
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'institute';
$conn   = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
return $conn;
}