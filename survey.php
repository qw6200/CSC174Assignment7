<?php session_start(); ?>
<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Survey</title>
	<meta name="harry potter movies" content="Harry Potter Movies">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header class="banner">
		<div class="bannerpart1">
		<h1>
			<a href="index.php">Harry Potter Recap</a>
		</h1>
		</div>
		<div class="bannerpart2">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="movies.php">Movies</a></li>
				<li><a href="survey.php">Survey</a></li>
			</ul>
		</nav>
		</div>
	</header>

	<div class="formcont">
	<h2>Harry Potter Survey</h2>
	<form action="insert_answers.php" method="post">
		<div>
			<label for="full_name">Full Name:</label>
			<br>
			<input class="topinput" type="text" name="full_name" id="full_name">
		</div>
		<div>
			<label for="email">Email:</label>
			<br>
			<input class="topinput" type="email" name="email" id="email">
		</div>
		<div>
			<label for="location">Location:</label>
			<br>
			<input class="topinput" type="text" name="location" id="location">
		</div>
		<div>
			<label for="seen">How many of the movies have you watched? (0-8) :</label>
			<br>
			<input class="topinput" type="number" name="num_watched" id="num_watched">
		</div>
		<div>
			<label for="watch">Which of the movies is your favorite? :</label>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Philosopher's Stone"><span class="radiolabel">Harry Potter and the Philosopher's Stone</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Chamber of Secrets"><span class="radiolabel">Harry Potter and the Chamber of Secrets</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Prisoner of Azkaban"><span class="radiolabel">Harry Potter and the Prisoner of Azkaban</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Goblet of Fire"><span class="radiolabel">Harry Potter and the Goblet of Fire</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Order of the Phoenix"><span class="radiolabel">Harry Potter and the Order of the Phoenix</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Half-Blood Prince"><span class="radiolabel">Harry Potter and the Half-Blood Prince</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Deathly Hallows – Part 1"><span class="radiolabel">Harry Potter and the Deathly Hallows – Part 1</span>
			<br>
			<input class="radio" type="radio" name="fav_movie" id="fav_movie" value="Harry Potter and the Deathly Hallows – Part 2"><span class="radiolabel">Harry Potter and the Deathly Hallows – Part 2</span>
			<br>
		</div>
		<div class="buttoncont">
			<input class="submitbutton" type="submit" value="Submit">
		</div>
	</form>
	</div>

	<footer>
		<?php if(isset($_SESSION['username'])) { ?>
			<a href="logout.php">Logout</a>
			<a href="admin.php">Admin</a>
			<?php } else { ?>
			<a href="login.php">Login</a>
		<?php } ?>
	</footer>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/menu-highlighter.js"></script>
</body>

</html>