<?php
session_start();

// connect to the database

include('renderform.php');

include('config.php');



	// get form data, making sure it is valid

	$full_name = mysqli_real_escape_string($link, htmlspecialchars($_POST['full_name']));

	$email = mysqli_real_escape_string($link, htmlspecialchars($_POST['email']));

	$location = mysqli_real_escape_string($link, htmlspecialchars($_POST['location']));

    $num_watched = mysqli_real_escape_string($link, htmlspecialchars($_POST['num_watched']));

    $fav_movie = mysqli_real_escape_string($link, htmlspecialchars($_POST['fav_movie']));

    

	// check to make sure both fields are entered
	if ($full_name == '' || $email == '' || $location == '' || $num_watched == '' || $fav_movie == '') {

        $error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again

		renderForm($full_name, $email, $location, $num_watched, $fav_movie, $error);

	} else {

        $sql = "INSERT INTO urcscon3_atlanti.survey (full_name, email, location, num_watched, fav_movie) 

        VALUES ('$full_name', '$email', '$location', $num_watched, '$fav_movie')";

        if(mysqli_query($link, $sql)){

            echo "Records added successfully. Thank you for your input.";

            if(isset($_SESSION['username'])) {
                header("Location: admin.php");
            } else {
                $link_address = "index.php";
                echo "<a href='".$link_address."'>Welcome Page</a>";
            }

            $subject = 'Harry Potter Survey Responses';

            $message = "Full Name: " . $full_name . "\r\n" . 
                        "Email: " . $email . "\r\n" .
                        "Location: " . $location . "\r\n" .
                        "Number of Harry Potter movies watched: " . $num_watched . "\r\n" . 
                        "Favorite Harry Potter movie: " . $fav_movie;

            $headers = 'From: webmaster@yourdomain.com' . "\r\n" .

            'Reply-To: webmaster@yourdomain.com';
            mail($email, $subject, $message, $headers);

        } else{

            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

        }

    }

