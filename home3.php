<?php 

include "db.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>home 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header midleft">
	<a href="home.php">deshboard</a><br>
	<a href="profile.php">view profile</a><br>
	<a href="changeprofilepic.php">change profile pic</a><br>
	<a href="changepassword.php">change password</a><br>
	<a href="logout.php">logout</a><br>
	
</div>
<?php


$result = mysqli_query($mysqli,"SELECT * FROM user where 'user_name'='".$uname."'");
 
 

 
$row = mysqli_fetch_array($result);
{

echo  "id :". $row['id'] . "<br>";
echo "user name" . $row['user_name'] . "<br>";
echo "email :" . $row['email'] . "<br>";
echo "gender" . $row['gender'] . "<br>";
echo "dob :" . $row['dob'] . "<br>";

}
?>



<div class="header midright">
	<h1>Welcome</h1>	
</div>
</body>
</html>