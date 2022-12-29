<?php

$x = mysqli_connect("localhost","root","","db_login") or die(mysqli_error($x));
if($x)
{
	echo "Database Connected Sucessfully....";
}
else
{
	echo "Failed";
}

?>