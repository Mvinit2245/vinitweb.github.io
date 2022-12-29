<?php
	include 'con1.php';
	if(isset($_POST["btn_submit"]))
	{
		extract($_POST);
		
		$insert = mysqli_query($x,"insert into db_regi(Name,Contact,Address,DOB,City,Email,Password) values('$st_name','$st_con','$st_add','$st_dob',
			'$st_city','$st_mail','$st_pass')") or die(mysqli_error($x));
		
		if($insert)
			{
				echo '<script type="text/javascript">';
	            echo "alert('Data inserted successfully');";
	            echo "</script>"; 
			}
		else
		{
			echo '<script type="text/javascript">';
	            echo "alert('Data not inserted successfully');";
	            echo "</script>"; 
		}
	}
?>

<!DOCTYPE html>
<html>
<head>

	<title>JQuery Validation Engine</title>
	<link rel="stylesheet" href="jQuery-Validation-Engine-3.0.0/css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="jQuery-Validation-Engine-3.0.0/css/template.css" type="text/css"/>
	<script src="jQuery-Validation-Engine-3.0.0/js/jquery-3.4.1.min.js" type="text/javascript">
	</script>
	<script src="jQuery-Validation-Engine-3.0.0/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="jQuery-Validation-Engine-3.0.0/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#myform").validationEngine();
		});
	</script>
	
</head>
<body>
	<center>
 <form method="post"  id="myform"> <br> <br>

   <label> Name </label>
   <input type="text" name="st_name" placeholder="enter your name" class="validate[required] text-input"> <br> <br> <br>
   <label class="validate[required]"> Conact</label>
   <input type="number" name="st_con" > <br> <br> <br>
   <label class="validate[required]"> Address </label>
   <textarea rows=5 cols=25 name="st_add"> </textarea><br> <br> <br>
   <label> DOB </label>
	 <input type="date" name="st_dob" class="validate[required]"><br> <br> <br>
	 <label> City </label>
	 <select name="st_city" class="validate[required]">
	 	<option> Nashik</option>
	 	<option>Mumbai</option>
	 	<option>Jalgaon</option>
	 	<option>Pune</option>
	 </select><br> <br> <br>
	 <!-- <label class="validate[required, custom[requiredInFunction]]"> Gender </label>
	 <input type="radio" name="st_gender" >Male
	 <input type="radio" name="st_gender" >Female
	 <input type="radio" name="st_gender" >Other <br> <br> <br> -->
  <label> Email </label>
<input name="st_mail" class="validate[required]" > <br> <br> <br>
<label> Password </label>
<input class="validate[required] text-input" type="password" name="st_pass" id="password"/><br><br> <br>
</center>
<center>
<input type="submit" name="btn_submit" value="submit">

 </form>
</body>
</html>