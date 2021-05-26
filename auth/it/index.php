<?php
session_start();
if(!$_SESSION['it'] ){
    header("location: ../index.php");
}
?>