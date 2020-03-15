<!DOCTYPE html>

<?php 
include "h3.php";
include "db.php";

 ?>
<html>
<head>
	<title>registration</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset style="width: 300px">
			<legend>REGISTRATION</legend>
			Name:<input type="text" name="name">
			<br><br>
			<hr>
			Email:<input type="email" name="email"><br><br>
			<hr>
			User Name:<input type="text" name="user_name"><br><br>
			<hr>
			Password:<input type="password" name="password"><br><br>
			<hr>
			Confirm Password:<input type="password" name="cpassword"><br><br>
			<hr>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other">Other
			<hr>
			<table>
				<tr>
					<td>dd</td><td></td><td>mm</td><td></td><td>yyyy</td>
				</tr>
				<tr>
					<td><input type="tel" maxlength="2" name="dd" style="width: 40px"></td><td>/</td><td><input type="tel" maxlength="5" name="mm" style="width: 50px"></td><td>/</td><td><input type="tel" maxlength="4" name="yyyy" style="width: 50px"></td>
				</tr>
			</table>
			<hr>
			<br>
			
			<input type="submit" name="submit" value="Submit"> <br> <input type="reset" name="submit" value="Reset">
		</fieldset>
	</form>	

	<?php 

	if(isset($_POST["submit"])){

		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$gender=$_POST["gender"];
		$dob=$_POST["dd"]."/".$_POST["mm"]."/".$_POST["yyyy"];
		$uname=$_POST["user_name"];

		echo $name.$password.$email.$gender.$dob.$uname;

		$result = mysqli_query($mysqli, "INSERT INTO user(name,password,email,gender,dob,User_name) VALUES('$name','$password','$email','$gender','$dob','$uname')");


		echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='home.php'>Home</a>";


	}


	 ?>
	 <br><br>
	 <a href="h3.php"> back</a>


	<div>
	<h4 class="footer">copy right to sr company</h4>
</div>

</body>
</html>