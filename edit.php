<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include('renderEditForm.php');

// connect to the database
include('config.php');

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) {
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) {
		// get form data, making sure it is valid
		$id = $_POST['id'];
		$full_name = mysqli_real_escape_string($link, htmlspecialchars($_POST['full_name']));
		$email = mysqli_real_escape_string($link, htmlspecialchars($_POST['email']));
		$location = mysqli_real_escape_string($link, htmlspecialchars($_POST['location']));
		$created_at = mysqli_real_escape_string($link, htmlspecialchars($_POST['created_at']));
		$num_watched = mysqli_real_escape_string($link, htmlspecialchars($_POST['num_watched']));
		$fav_movie = mysqli_real_escape_string($link, htmlspecialchars($_POST['fav_movie']));

		// check that firstname/lastname fields are both filled in
		if ($full_name == '' || $email == '' || $location == '' || $created_at == '' || $num_watched == '' || $fav_movie == '') {
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';
			//error, display form
			renderEditForm($id, $full_name, $email, $location, $created_at, $num_watched, $fav_movie, $error);

		} else {
			// save the data to the database
			$result = mysqli_query($link, "UPDATE urcscon3_atlanti.survey SET full_name='$fullname', email='$email', location='$location',
												 created_at=$created_at, num_watched=$num_watched, fav_movie='$fav_movie' WHERE id='$id'");

			// once saved, redirect back to the homepage page to view the results
			header("Location: admin.php");
		}
	} else {
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
} else {
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($link, "SELECT * FROM urcscon3_atlanti.survey WHERE id=$id");
		$row = mysqli_fetch_array( $result );
		// check that the 'id' matches up with a row in the databse
		if($row) {
			// get data from db
			$full_name = $row['full_name'];
			$email = $row['email'];
			$location = $row['location'];
			$num_watched = $row['num_watched'];
			$fav_movie = $row['fav_movie'];

			// show form
			renderEditForm($full_name, $email, $location, $num_watched, $fav_movie, '');
		} else {
			// if no match, display result
			echo "No results!";
		}
	} else {
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error!';
	}
}
?>