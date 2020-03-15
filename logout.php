<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["login"]);
header("Location:home2.php");
?>