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
		<h1> <a href="index.php">Harry Potter Recap</a></h1>
		<nav>
			<a href="index.php">Home</a>
			<a href="movies.php">Movies</a>
			<a href="survey.php">Survey</a>
		</nav>
	</header>

	<h2>Harry Potter Survey</h2>

	<div>
		<label for="full_name">Full Name? *</label> 
		<input type="text" name="full_name" id="full_name" value="<?php echo $full_name; ?>"/>
	</div>
	<div>
		<label for="email">Email? *</label> 
		<input type="email" name="email" id="email" value="<?php echo $email; ?>"/>
	</div>
	<div>
		<label for="location">Location? *</label> 
		<input type="text" name="location" id="location" value="<?php echo $location; ?>"/>
	</div>
	<div>
		<label for="seen">Have you seen the Harry Potter movies? *</label> 
		<input type="text" name="seen" id="seen" value="<?php echo $seen; ?>"/>
	</div>
	<div>
		<label for="watch">Will you watch one of them in the next month? *</label> 
		<input type="text" name="watch" id="watch" value="<?php echo $watch; ?>"/>
	</div>
</body>
</html>