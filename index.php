<?php include 'control.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="control.php" method="POST">
					<div class="m-5"></div>
					<div class="row">
						<div class="col">
							<input name="fname" type="text" class="form-control" placeholder="First name">
						</div>
						<div class="col">
							<input name="lname" type="text" class="form-control" placeholder="Last name">
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<div class="m-3"></div>
							<button class="btn btn-primary" type="submit" name="insert">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row m-5"></div>
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $value) { ?>
							<tr>
								<th scope="row"><?php echo $value['id'] ?></th>
								<td><?php echo $value['fname'] ?></td>
								<td><?php echo $value['lname'] ?></td>
								<td>
									<form action="update.php" method="GET">
										<input type="hidden" name="id" value="<?php echo $value['id'] ?>" />
										<input class="btn btn-warning" type="submit" name="update" value="Edit">
									</form>
								</td>
								<td>
									<form action="control.php" method="GET">
										<input type="hidden" name="id" value="<?php echo $value['id'] ?>" />
										<input class="btn btn-danger" type="submit" name="delete" value="Delete">
									</form>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
