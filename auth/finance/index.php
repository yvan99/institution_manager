<?php
session_start();
if(!$_SESSION['finance'] ){
    header("location: ../finance/index.php");
}
?>