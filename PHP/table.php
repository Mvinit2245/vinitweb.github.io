
<!DOCTYPE html>
<html>
<head>
	<title>view record</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
</head>
<body>

	<div class="container-fluid">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Contact</th>
                        <th>Email</th>
						<th>Address</th>
						<th>City</th>
						<th>Gender</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					include "config.php";
					$view = mysqli_query($con,"select * from tbl_register") or die (mysqli_error($con));
					
					while($asd = mysqli_fetch_array($view))
					{
						extract($asd);
					
				?>
				<tbody>
						<tr>
							<td><?php echo $name; ?></td>
							<td><?php echo $contact; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $address; ?></td>
							<td><?php echo $city;?></td>
							<td><?php echo $gender; ?></td>
							<td>
								<a href="update.php?stud_id=<?php echo $id;?>">Update</a>
								<a href="delete.php?stud_id=<?php echo $id;?>">Delete</a>
							</td>
						</tr>
				</tbody>
				<?php } ?>
			</table>
	    </div>
	<div>
</body>
</html>