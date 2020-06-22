<?php include 'control.php'; ?>
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
						<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
						<div class="col">
							<input name="fname" type="text" class="form-control" placeholder="First name" value="<?php echo isset($fnameU) ? $fnameU : "" ?>">
						</div>
						<div class="col">
							<input name="lname" type="text" class="form-control" placeholder="Last name" value="<?php echo isset($lnameU) ? $lnameU : "" ?>">
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<div class="m-3"></div>
							<button class="btn btn-primary" type="submit" name="updateFinish">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
