<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
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

<form method="post" action="cnew_account.php"
	   class="shadow-lg p-3 mb-5 bg-white
	  		  rounded center
	 		  border border-primary">
<fieldset>
<legend>NEW PROFILE</legend>

<div class="form-group">Username
<input type="text" name="uname"  class="form-control"></div>

<div class="form-group">Age
<input type="number" name="age"  class="form-control"></div>

<div class="form-group">Password
<input type="password" name="pw" class="form-control"></div>

<div class="row">
<div class="col-4">
<button type="submit" class="btn btn-primary">Submit</button></div>
<div class="col-8">
<a href="login.html"  class="btn btn-outline-primary btn-block">Log In</a></div>
</div>

</fieldset>
</form>

<?php
include 'config.php';
$con = @new mysqli($host,$username,$password,$database);
if($con->connect_error)
	{die("Error : ".$con->connect_error);}
	
if($_POST['uname']==NULL){exit();}
$insert_data_sql = "
INSERT INTO UserInfo (UserName,PassWord,Age)
VALUES('".$_POST['uname']."','".$_POST['pw']."','".$_POST['age']."')";

$insert_data=$con->query($insert_data_sql);
if($insert_data)
	{echo '
	<br><div class="alert alert-success alert-dismissible fade show" role="alert">
	Account Created
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>';}
else{echo "Try again";}
?>

</div>
</body>
</html>

