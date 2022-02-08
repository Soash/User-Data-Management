<?php
include 'config.php';
$con = @new mysqli($host,$_POST["username"],$_POST["password"],$database);
if($con->connect_error)
	{die("Error");}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>
	<meta charset="utf-8">
    <meta name="author" content="Soash">
	<meta name="viewport"
	   content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
<script type="text/javascript"  src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#user_info').DataTable();
} );
</script>
</head>

<body>
<table id="user_info" class="display">
<thead><tr>
<th>id</th>
<th>UserName</th>
<th>PassWord</th>
<th>Age</th>
</tr></thead>
<tbody>

<?php
$Udata = $con->query("SELECT * FROM UserInfo");
while($data = $Udata->fetch_array())
{
echo "<tr>
 <td>".$data['id']."	  </td>
 <td>".$data['UserName']."</td>
 <td>".$data['PassWord']."</td>
 <td>".$data['Age']."	  </td>
     </tr>";
}
?>
</tbody>
</table>

</body>
</html>