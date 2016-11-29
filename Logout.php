<?php
session_start();
unset($_SESSION["ses1"]);

if($_SESSION['ses1']=="")
{
  header('location:main_guest.php');
}


?>
