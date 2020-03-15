<?php 
session_start();




if(isset($_SESSION["name"])){
	$uname=$_SESSION["name"];
	include "h2.php";
	include "home3.php";
}

else{
	include "h3.php";
	echo "welcome to the company";
}

 ?>


<div>
	<h4 class="footer">copy right to sr company</h4>
</div>