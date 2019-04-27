<?php
// connect to the database
include('config.php');

	// get form data, making sure it is valid
	$full_name = mysqli_real_escape_string($link, htmlspecialchars($_POST['full_name']));
	$email = mysqli_real_escape_string($link, htmlspecialchars($_POST['email']));
	$location = mysqli_real_escape_string($link, htmlspecialchars($_POST['location']));
    $num_watched = mysqli_real_escape_string($link, htmlspecialchars($_POST['num_watched']));
    $fav_movie = mysqli_real_escape_string($link, htmlspecialchars($_POST['fav_movie']));
    echo "-------------";
	// check to make sure both fields are entered
	if ($full_name == '' || $email == '' || $location == '' || $num_watched == '' || $fav_movie == '') {
		// generate error message
        // Attempt insert query execution
        echo "empty";
	} else {
        echo "NOT EMPTY";
        $sql = "INSERT INTO urcscon3_atlanti.survey (full_name, email, location, num_watched, fav_movie) 
        VALUES ('$full_name', '$email', '$location', $num_watched, '$fav_movie')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
?>