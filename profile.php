<?php
include 'config.php';
$con = @new mysqli($host,$username,$password,$database);
if($con->connect_error)
	{die("Error");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>
	<meta charset="utf-8">
    <meta name="author" content="Soash">
</head>

<body>

<?php
$profile_data = $con->query("SELECT * FROM UserInfo WHERE
			 				 UserName='$_POST[uname]' AND
			 				 PassWord='$_POST[pw]'");

echo $_POST["uname"]."<br>";
echo $_POST["pw"]."<br>";

while($profile = $profile_data->fetch_array())
{
echo $profile['id'] . " " . 
	 $profile['UserName'] . " " . 
	 $profile['PassWord'] . " " . 
	 $profile['Age'];
}
?>

</body>
</html>