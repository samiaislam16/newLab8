<?php
	session_start();

	include "h3.php";
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<!-- <form method="post">
		<table>
			
			<tr>
				<td><b>Email :</b></td>
				<td><input type="text" name="email"/></td>
				
			</tr>
			
			<tr>
				<td><b>Password :</b></td>
				<td><input type="password" name="pass"/></td>
				
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
	</form> -->

<div class="header body">

	<form method="post" >
		<fieldset style="width: 300px">
			<legend>LOGIN</legend>
			User name:<input type="text" name="name">	<br>
			password:<input type="password" name="pass"><br>
			<hr>
			<input type="checkbox" name="rememberMe" value="remember me">Remember Me
			<input type="submit" name="submit" value="submit">


			<a href="forgetPassword.php"> forget password?</a>
		</fieldset>
	</form>	
	</div>

	
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "samia";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		   
		  
		  $sql = "SELECT * FROM user WHERE user_name = '".$_POST["name"]."' and password = '".$_POST["pass"]."'";
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0)
		  {
			  $_SESSION["name"]=$_POST["name"];
			  $_SESSION["login"]=true;
			  echo"logged in";
			  header("location: home.php");
		  }
			  
		  else
			  echo "wrong email or password";
   }
	?>

	<a href="h3.php"> back</a>

<div>
	<p class="footer">copy right to sr company</p>
</div>
	
</body>