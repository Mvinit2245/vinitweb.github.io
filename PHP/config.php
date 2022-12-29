<?php

$con = mysqli_connect("localhost","root","","db_login") or die(mysqli_error($con));
if($con)
{
	echo "Database Connected Sucessfully....";
}
else
{
	echo "Failed";
}

?>