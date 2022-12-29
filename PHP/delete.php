<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
   <?php
   include 'con1.php';
   if(isset($_GET['stud_id']))
   {

   	$delete=mysqli_query($x,"delete from db_regi where id='".$_GET['stud_id']."'") or die(mysqli_error($x));
	 	
   
   if($delete)
		{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Deleted');";
	            echo 'window.location.href = "table2.php";';
	            echo "</script>";
     	}
			else
			{
	            echo '<script type="text/javascript">';
	            echo "alert('record Not Deleted');";
	            echo "</script>";             
      

	}
}

		?>
</body>
</html>