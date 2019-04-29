<?php

// connect to the database

include('renderEditForm.php');

include('config.php');



    // get form data, making sure it is valid
    $id = mysqli_real_escape_string($link, htmlspecialchars($_POST['id']));
	$full_name = mysqli_real_escape_string($link, htmlspecialchars($_POST['full_name']));
	$email = mysqli_real_escape_string($link, htmlspecialchars($_POST['email']));
	$location = mysqli_real_escape_string($link, htmlspecialchars($_POST['location']));
    $num_watched = mysqli_real_escape_string($link, htmlspecialchars($_POST['num_watched']));
    $fav_movie = mysqli_real_escape_string($link, htmlspecialchars($_POST['fav_movie']));


	// check to make sure both fields are entered
	if ($full_name == '' || $email == '' || $location == '' || $num_watched == '' || $fav_movie == '') {

        $error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again

		renderEditForm($full_name, $email, $location, $num_watched, $fav_movie, $error);

	} else {
        $sql = "UPDATE urcscon3_atlanti.survey SET full_name='$full_name', email='$email', location='$location', num_watched=$num_watched, fav_movie='$fav_movie' WHERE id = $id"; 
        if(mysqli_query($link, $sql)){
            header("Location: admin.php");
        } else{

            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

        }

    }

