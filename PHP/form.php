<?php
	include 'con1.php';
	if(isset($_POST['btn_submit']))
	{
		extract($_POST);
		$insert = mysqli_query($x,"insert into form (Name , Email , Number , Address , DOB , Password , Gender , City) values( '$stud_name' ,  '$stud_mail' ,  '$stud_no'  , '$stud_add' ,  '$stud_Dob' , '$stud_pass' , '$stud_gender' , '$stud_city' )") or die(mysqli_error($x));
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
	<title>Registration Form</title>
</head>
<body>
	<h1><center>REGISTRATION FORM</center></h1>
	<hr>
<form method="post">


	<center>
	<label>Name :</label>
	<input type="text" name="stud_name"placeholder="Please Enter your Name">
	<br> </br>

 	<label>Email :</label>
	<input type="email" name="stud_mail"placeholder="Please Enter your Email">
	<br> </br>

	<label>Number :</label>
	<input type="number" name="stud_no"placeholder="Please Enter your Number">
	<br> </br>

	<label>Address:</label>
	<input type="textarea" name="stud_add"placeholder="Please Enter your Address">
	<br> </br>

	<label>DOB:</label>
	<input type="date" name="stud_Dob">
	<br> </br>

	<label>Password:</label>
	<input type="password" name="stud_pass"placeholder="Please Enter your Password">
	<br> </br>

	<label>Gender:</label>
	<input type="radio" name="stud_gender"value="Male">Male
	<input type="radio" name="stud_gender"value="Female">Female
	<br> </br>

	<label>City:</label>
	<select name="stud_city">
	<option>nashik</option>
	<option>pune</option>
	<option>mumbai</option>
	</select>
	<br> </br>

	<input type="submit" name="btn_submit" value="Submit">
	<input type="button" name="reset" value="Reset">
	</table>
</center>

</form>
</body>
</html>