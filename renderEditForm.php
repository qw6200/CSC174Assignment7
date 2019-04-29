<?php
// creates the edit record form
function renderEditForm($id, $full_name, $email, $location, $num_watched, $fav_movie, $error) {
?>
<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Survey</title>
	<meta name="harry potter movies" content="Harry Potter Movies">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<header>
		<h1>
			<a href="index.php">Harry Potter Recap</a>
		</h1>
		<nav>
			<a href="index.php">Home</a>
			<a href="movies.php">Movies</a>
			<a href="survey.php">Survey</a>
		</nav>
	</header>

	<h2>Harry Potter Survey</h2>
	<?php
		// if there are any errors, display them
		if ($error != '') {
			echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
		}
	?>
	<form action="update_answers.php" method="post">
		<div>
			<div>
				<div>
					<input type="hidden" name="id" value="<?php echo $id; ?>">ID
					<?php echo $id; ?>
					<br>
				</div>
				<div>
					<label for="full_name">Full Name:</label>
					<input type="text" name="full_name" id="full_name" value="<?php echo $full_name; ?>">
				</div>
				<div>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" value="<?php echo $email; ?>">
				</div>
				<div>
					<label for="location">Location:</label>
					<input type="text" name="location" id="location" value="<?php echo $location; ?>">
				</div>
				<div>
					<label for="seen">How many of the Harry Potter movies have you watched? (0-8)</label>
					<input type="number" name="num_watched" id="num_watched" value="<?php echo $num_watched; ?>">
				</div>
				<div>
					<label for="watch">Which of the Harry Potter movies is your favorite?</label>
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Philosopher's Stone"
					 )? 'checked': ''?> value="Harry Potter and the Philosopher's Stone">Harry Potter and the Philosopher's Stone
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Chamber of Secrets"
					 )? 'checked': ''?> value="Harry Potter and the Chamber of Secrets">Harry Potter and the Chamber of Secrets
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Prisoner of Azkaban"
					 )? 'checked': ''?> value="Harry Potter and the Prisoner of Azkaban">Harry Potter and the Prisoner of Azkaban
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Goblet of Fire"
					 )? 'checked': ''?> value="Harry Potter and the Goblet of Fire">Harry Potter and the Goblet of Fire
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Order of the Phoenix"
					 )? 'checked': ''?> value="Harry Potter and the Order of the Phoenix">Harry Potter and the Order of the Phoenix
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Half-Blood Prince"
					 )? 'checked': ''?> value="Harry Potter and the Half-Blood Prince">Harry Potter and the Half-Blood Prince
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Deathly Hallows – Part 1"
					 )? 'checked': ''?> value="Harry Potter and the Deathly Hallows – Part 1">Harry Potter and the Deathly Hallows – Part
					1
					<br>
					<input type="radio" name="fav_movie" id="fav_movie" <?php echo ($fav_movie=="Harry Potter and the Deathly Hallows – Part 2"
					 )? 'checked': ''?> value="Harry Potter and the Deathly Hallows – Part 2">Harry Potter and the Deathly Hallows – Part
					2
					<br>
				</div>
			</div>
		</div>
		<input type="submit" value="Submit">
	</form>
</body>

</html>
<?php
}
