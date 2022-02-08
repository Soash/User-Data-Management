<!DOCTYPE html>
<html>
<head>
	<title>Create Table</title>
	<meta charset="utf-8">
    <meta name="author" content="Soash">
	<meta name="viewport"
	   content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">

<?php
include 'config.php';
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
	{echo '<br><div class="alert alert-danger" role="alert">
			Table Created</div>';}
else{echo "Error Table";}
?>

</div>
</body>
</html>