<?php
session_start();
if(!$_SESSION['marketing'] ){
    header("location: ../marketing/index.php");
}
?>