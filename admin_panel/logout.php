<?php
session_start(); 
session_destroy(); 
header("location:../user_panel/home_page.php"); 
?>