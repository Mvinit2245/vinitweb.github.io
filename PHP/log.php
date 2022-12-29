<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
    <table border="2" cellpadding="10">
  
  	<th> Username </th>
  	<th> Password </th>
  	<th colspan="2"> Action </th>


  	<?php 
     include "con2.php";
      $show=mysqli_query($x, "select * from tb_log ")or die(mysqli_error($x));
      while($cbs=mysqli_fetch_array($show))
      {
      	extract($cbs);
      	?>

      	<tbody>
      		<td><?php echo $Username;?> </td>
      		<td><?php echo $Password;?> </td>
      		
      		<td><a href="up.php?stud_id=<?php echo $id;?>">update</a> </td>
            <td><a href="delete.php?stud_id=<?php echo $id;?>">delete</a>
      			</td>
      	</tbody>

     
     <?php } ?>
 </table>


</body>
</html>