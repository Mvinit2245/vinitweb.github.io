<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
</div>
<div class="col-md-4">
<?php
	 include "config.php";
	 if(isset($_GET['stud_id']))
	 {

	 	$view=mysqli_query($con,"select * from tbl_register where id='".$_GET['stud_id']."'") or die(mysqli_error($con));
	 	$fetch=mysqli_fetch_array($view);
	 	extract($fetch);
	 }
	?>
	<form method="POST" class="form-horizontal">
		<div class="form-group form-group-lg">
			Name:<input type="text" name="name" placeholder="Enter Your Name" class="form-control" aria-describedby="inputSuccess3Status" value="<?php echo $name;?>">

			Mobile No: <input type="text" name="mobile" placeholder="Enter Your Mobile No" maxlength="10"class="form-control" value="<?php echo $contact; ?>">

			Email:<input type="Email" name="email" placeholder="Enter Your Email" class="form-control" value="<?php echo $email;?>">

			Password:<input type="password" name="password" placeholder="Enter Your password"class="form-control" value="<?php echo $password;?>">

			Address<textarea name="address"  class="form-control" ><?php echo $address ?></textarea>

			City:<select name="city" class="form-control" >
				<option value="">Select City</option>
				<option value="Nashik" <?php if($city=='Nashik') { echo "selected";} ?>>Nashik</option>
				<option value="Mumbai" <?php if($city=='Mumbai') { echo "selected";} ?>>Mumbai</option>
				<option Value="Delhi" <?php if($city=='Delhi') { echo "selected";} ?>>Delhi</option>
			</select>

			<br>
			Gender:<input type="radio" name="gender" value="Male" <?php if($gender=='Male') { echo "checked";} ?>>Male
			<input type="radio" name="Gender" Value="Female" <?php if($gender=='Female') { echo "checked";} ?>>Female
		
		<div >
		<br>
		<button type="submit" name="update" class="btn btn-success" > Update</button>
		<button type="reset" name="reset" class="btn btn-danger"> reset</button>
	</div>
	</form>


	<?php 
		if(isset($_POST['update']))
		{
			extract($_POST);
			
			$update=mysqli_query($con,"update tbl_register set
				name='".$name."',
				contact='".$mobile."',
				email='".$email."',
				password='".$password."',
				address='".$address."',
				city='".$city."',
				gender='".$gender."'
				where id='".$_GET['stud_id']."'") or die (mysqli_error($con));
			if($update)
			{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Updated');";
	            echo 'window.location.href = "table.php";';
	            echo "</script>";
          	}
			else
			{
	            echo '<script type="text/javascript">';
	            echo "alert('record  Not Update');";
	            echo "</script>";             
             }

		}
	?>


</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</body>
</html>
