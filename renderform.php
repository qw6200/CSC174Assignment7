<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $phone, $email, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Record</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
		.cancel {
			padding-top: 30px;
		}
	</style>
</head>
<body>
	<?php session_start(); ?>
<div class="container">
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID:</strong> 
	<?php echo $id; ?>

	<div class="form-group">
		<label for="full_name">Full Name: *</label> 
		<input class="form-control" type="text" name="full_name" id="full_name" value="<?php echo $full_name; ?>"/>
	</div>

	<div class="form-group">
		<label for="email">Email? *</label> 
		<input type="email" name="email" id="email" value="<?php echo $email; ?>"/>
	</div>

	<div class="form-group">
		<label for="location">Location? *</label> 
		<input type="text" name="location" id="location" value="<?php echo $location; ?>"/>
	</div>

	<div class="form-group">
		<label for="seen">Have you seen the Harry Potter movies? *</label> 
		<input type="text" name="seen" id="seen" value="<?php echo $seen; ?>"/>
	</div>

	<div class="form-group">
		<label for="watch">Will you watch one of them in the next month? *</label> 
		<input type="text" name="watch" id="watch" value="<?php echo $watch; ?>"/>
	</div>

	<div class="form-group">
		<div>* required</div>
		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</div>
</form>

<div class="cancel">
	<a href=".">Cancel</a>
</div>

</div>
</body>
</html>
<?php
}
?>