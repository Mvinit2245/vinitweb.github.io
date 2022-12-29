<?php
	include 'config.php';
	if(isset($_POST['btn_submit']))
	{
		extract($_POST);
		$insert =mysqli_query($con,"insert into tb_log(Username,Password) values('$userid', '$pass')") or die(mysqli_error($con));
		if($insert)
			{
				echo "Data Inserted Sucessfully";
			}
		else
		{
			echo "Data inset faild";
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!-- <script type="text/javascript">
		function ValidLogin() {
					var	x1 = document.forms["NewLogin"]["userid"].value
					if (x1!="") {
						alert("Enter User id")
						return false;
					}
					var	x2 = document.forms["NewLogin"]["pass"].value
					if (x2!="") {
						alert("Enter Password")
						return false;
					}
				}
			</script> -->


</head>
<body>
	<h1><center>Login</center></h1>
	<table border="2" style="width:100%" bgcolor="#ADD8E6">
		<th><a href="Register.html">Register</a></th>
		<th><a href="Login.html">Login</a></th>
	</table>

<br>
	<table border="2" style="width:100%" bgcolor="#ADD8E6">
		<form name="NewLogin" method="post" >
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="userid" ></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="Password" name="pass" ></td>
			</tr>
	</table>
			<center><input type="submit" name="btn_submit" value="Submit"></center>
</form>
</body>
</html>