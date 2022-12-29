<?php
	include "config.php";

	if(isset($_POST['btn_submit']))
	{
		extract($_POST);

		$insert = mysqli_query($connect,"insert into tbl_register(name, contact, email, dob, password, address, city, gender, language, photo) values('$stud_name','$stud_contact','$stud_email','$dob','$stud_pass','$stud_address','$stud_city','$stud_gender','$language','$photo')") or die(mysqli_error($connect));
		if($insert)
		{
			echo "Data insert successfully..!";
		}
		else
		{
			echo "Data Error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome in my first session</title>
	<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/template.css" type="text/css"/>
	<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
	
	<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
		});
	</script>
</head>
<body>
<h1><center>Sumago Infotech Pvt Ltd.</center></h1>
<hr>
<a href="html1.html">Home</a>
<a href="html2.html">About Us</a>
<a href="html3.html">Team</a>
<a href="html4.html">Contact us</a>
<marquee>Register Here!!!!</marquee>
<form id="formID" method="POST">
	<table border="2">
		<tr>
			<th><label>Name</label></th>
		<td><input type="text" name="stud_name" placeholder="Enter your name" class="validate[required,custom[onlyLetterSp]] text-input" ></td>
		</tr>
		<tr>
			<th><label>Contact</label></th>
			<td><input type="text" name="stud_contact" placeholder="Enter your Contact" class="validate[required,custom[phone]] text-input"></td>
		</tr>

		<tr>
			<th><label>Email</label></th>
			<td><input type="email" name="stud_email" class="validate[required,custom[email]]"></td>
		</tr>

		<tr>
				<th><label>DOB</label></th>
				<td><input type="date" name="dob" class="validate[required,custom[date]]"></td>
		</tr>

		<tr>
				<th><label>Password</label></th>
				<td><input type="Password" name="stud_pass" class="validate[required] text-input"></td>
		</tr>

		<tr>
			<th><label>Address</label></th>
			<td><textarea rows="5" cols="10" name="stud_address" class="validate[required] text-input"></textarea></td>
		</tr>

		<tr>
			<th><label>City</label></th>
			<td><select name="stud_city" class="validate[required]">
					<option>-----Select City------</option>
					<option>Nashik</option>
					<option>Pune</option>
					<option>Mumbai</option>
			</select>
			</td>
		</tr>

		<tr>
			<th><label>Gender</label></th>
			<td><input type="radio" name="stud_gender" value="Male" >Male
			<input type="radio" name="stud_gender" value="Female" >Female</td>
		</tr>

		<tr>

			<td><input type="submit" value="Submit" name="btn_submit">
			<input type="submit" value="Reset" name="btn_reset"></td>
		</tr>


</table>
</form>

</body>
</html>