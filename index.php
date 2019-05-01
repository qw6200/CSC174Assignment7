<?php session_start(); ?>
<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Harry Potter Recap</title>
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

	<main>
		<section>
			<div class="ztop">
			<figure>
				<img src="img/main_image.png" alt="main image">
			</figure>
			</div>
		</section>

		<article>
			<div class="zbot">
				<div class="zbotleft">
					<p>
						Harry Potter is a British-American namesake film series based on the eponymous novels by author
						J. K. Rowling. The series is distributed by Warner Bros. and consists of eight fantasy films,
						beginning with Harry Potter and the Philosopher's Stone (2001) and culminating with Harry Potter
						and the Deathly Hallows – Part 2 (2011). Five of the series' eight films are among the 50
						highest-grossing films of all time.
					</p>
				</div>
				<div class="zbotright">
					<a href="survey.php">Take the Survey!</a>
				</div>
			</div>
		</article>
	</main>
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