<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>

 <?php
   include 'con1.php';
   if(isset($_GET['stud_id']))
   {

   	$view=mysqli_query($x,"select * from db_regi where id='".$_GET['stud_id']."'") or die(mysqli_error($x));
	 	$fetch=mysqli_fetch_array($view);
	 	extract($fetch);
   }
   ?>

<form method="post" >

    Name:<input type="text" name="st_name" placeholder="enter your name" value="<?php echo $Name;?>" > <br> <br> <br>
    Conact:<input type="number" name="st_con" value="<?php echo $Contact;?>" > <br> <br> <br>
   Address:<textarea rows=5 cols=25 name="st_add" > <?php echo $Address ?> </textarea><br> <br> <br>
    DOB: <input type="date" name="st_dob" value="<?php echo $DOB;?>" ><br> <br> <br>
	  City: <select name="st_city"  >
	 	<option  <?php if($City=='Nashik') { echo "selected";} ?> > Nashik</option>
	 	<option  <?php if($City=='Mumbai') { echo "selected";} ?> >Mumbai</option>
	 	<option  <?php if($City=='Jalgaon') { echo "selected";} ?> >Jalgaon</option>
	 	<option  <?php if($City=='Pune') { echo "selected";} ?> >Pune</option>
	 </select><br> <br> 
	 <!-- <label class="validate[required, custom[requiredInFunction]]"> Gender </label>
	 <input type="radio" name="st_gender" >Male
	 <input type="radio" name="st_gender" >Female
	 <input type="radio" name="st_gender" >Other <br> <br> <br> -->
   Email: <input name="st_mail" value="<?php echo $Email;?>" > <br> <br> 
 Password: <input  type="password" name="st_pass"  value="<?php echo $Password;?>"/><br><br> <br>
</center>
<center>
<!-- <input type="submit" name="btn_submit" value="submit"> -->
<br>
		<button type="submit" name="update" class="btn btn-success" > update</button>
		<button type="reset" name="reset" class="btn btn-danger"> reset</button>
  </br>

 </form>

 <?php 
		if(isset($_POST['update']))
		{
			extract($_POST);
			
			$update=mysqli_query($x,"update db_regi set
				Name='".$st_name."',
				Contact='".$st_con."',
				Address='".$st_add."',
				DOB='".$st_dob."',
				City='".$st_city."',
				Email='".$st_mail."',
				Password='".$st_pass."'
				where id='".$_GET['stud_id']."'") or die(mysqli_error($x));
			if($update)
			{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Updated');";
	            echo 'window.location.href = "table2.php";';
	            echo "</script>";
     	}
			else
			{
	            echo '<script type="text/javascript">';
	            echo "alert('record Not Update');";
	            echo "</script>";             
      }

		}
	?>
</body>
</html>