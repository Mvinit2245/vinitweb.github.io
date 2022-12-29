<!DOCTYPE html>
<html>
<head>
	
	<title> login as</title>
</head>
<body>
    <center>


    	 <?php
   include "con2.php";
   if(isset($_GET['stud_id']))
   {

   	$view=mysqli_query($x,"select * from tb_log where id='".$_GET['stud_id']."'") or die(mysqli_error($x));
	 	$fetch=mysqli_fetch_array($view);
	 	extract($fetch);
   }
   ?>
    	<form method="POST" >

            Username:<input type="text" name="userid"  value="<?php echo $Username;?>"> <br> <br>
			
				Password:<input type="Password" name="pass" value="<?php echo $Password;?>"><br>
		<button type="submit" name="update"  > update</button>
		<button type="reset" name="reset" > reset</button>
  </br>

    	</form>


<?php 
		if(isset($_POST['update']))
		{
			extract($_POST);
			
			$update=mysqli_query($x,"update tb_log set
				Username='".$userid."',
				Password='".$pass."'	
				where id='".$_GET['stud_id']."'") or die(mysqli_error($x));
			if($update)
			{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Updated');";
	            echo 'window.location.href = "log.php";';
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






    </center>
</body>
</html>