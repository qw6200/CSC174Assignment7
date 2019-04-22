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
		<label for="age">Age? *</label> 
		<input type="text" name="age" id="age" value="<?php echo $age; ?>"/>
	</div>
	<div>
		<label for="major">Major? *</label> 
		<input type="text" name="major" id="major" value="<?php echo $major; ?>"/>
	</div>
	<div>
		<label for="seen">Have you seen the Harry Potter movies? *</label> 
		<input type="text" name="seen" id="seen" value="<?php echo $seen; ?>"/>
	</div>
	<div>
		<label for="popular">How popular do you think Harry Potter is? *</label> 
		<input type="text" name="popular" id="popular" value="<?php echo $popular; ?>"/>
	</div>
	<div>
		<label for="watch">Will you watch one of them in the next month? *</label> 
		<input type="text" name="watch" id="watch" value="<?php echo $watch; ?>"/>
	</div>
</body>
</html>