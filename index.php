<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
    <meta name="author" content="Soash">
	<meta name="viewport"
	   content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<style>
.center{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width:75%;
}
</style>
</head>
<body>
<div class="container">

<?php
include 'config.php';
/*
//creating connection between mysqlDB
//use @ to remove error message
$con = @new mysqli($host,$username,$password);
if($con->connect_error)
	{die("Error : ".$con->connect_error);}
else{echo '
<br><div class="alert alert-success alert-dismissible fade show" role="alert">
	Database Connected
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
  </button>
</div>';}

//creating new database
$cdb_sql = "CREATE DATABASE IF NOT EXISTS Test";
$creat_db = $con->query($cdb_sql);
if($creat_db)
	{echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	Database Created : Test
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>';}
else{echo "Error Database";}
*/

//creating table
$con = @new mysqli($host,$username,$password,$database);
if($con->connect_error)
	{die("Error : ".$con->connect_error);}
	
$ctb_sql = 
"CREATE TABLE IF NOT EXISTS `UserInfo` (
 `id` int(12) NOT NULL AUTO_INCREMENT,
 `UserName` varchar(16) NOT NULL,
 `PassWord` varchar(16) NOT NULL,
 `Age` int(4) NOT NULL,
 PRIMARY KEY (`id`)
)";
$creat_table = $con->query($ctb_sql);

if($creat_table)
	{echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	Table Created : UserInfo
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>';}
else{echo "Error Table";}
?>

<div class="center list-group shadow-lg p-3 mb-5 bg-white rounded border border-success">
<h4>User Data Management</h4>
<a href="cnew_account.php" class="list-group-item list-group-item-success">New Account</a>
<a href="login.html" 	class="list-group-item list-group-item-info">Log In</a>
<a href="userinfo.html" class="list-group-item list-group-item-warning">User Info</a>
</div>

</div>
</body>
</html>
