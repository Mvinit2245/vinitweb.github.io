<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <table border="2" cellpadding="10" cellspacing="10">
    <th> ID </th>
  	<th> Name </th>
  	<th> Contact </th>
  	<th> Address </th>
  	<th> DOB</th>
  	<th> City </th>
  	<th> Email </th>
  	<th> Password </th>
  	<th colspan="2"> Action </th>
 

  <?php 
     include 'con1.php';
      $show=mysqli_query($x, "select * from db_regi")or die(mysqli_error($x));
      while($cbs=mysqli_fetch_array($show))
      {
      	extract($cbs);
      	?>

      	<tbody>
          <td><?php echo $id; ?> </td>
      		<td><?php echo $Name; ?> </td>
      		<td><?php echo $Contact; ?> </td>
      		<td><?php echo $Address; ?> </td>
      		<td><?php echo $DOB; ?> </td>
      		<td><?php echo $City; ?> </td>
      		<td><?php echo $Email; ?> </td>
      		<td><?php echo $Password; ?> </td>
      		<td><a href="update.php?stud_id=<?php echo $id;?>">update</a> </td>
            <td><a href="delete.php?stud_id=<?php echo $id;?>">delete</a>
      			</td>
      	</tbody>

     
     <?php } ?>
  </table>
</body>
</html>