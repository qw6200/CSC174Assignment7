<?php
// Initialize the session
 session_start();
 
// Check if the user is logged in, if not then redirect him to login page
//  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//      header("location: login.php");
//      exit;
// }

// connect to the database
include('config.php');

// get results from database
$result = mysqli_query($link, "SELECT * FROM urcscon3_atlanti.survey");
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col" >ID</th>
            <th scope="col" >Full Name</th>
            <th scope="col" >Email</th>
            <th scope="col" >Location</th>
            <th scope="col" >Timestamp</th>
            <th scope="col" ># of HP Movies Watched</th>
            <th scope="col" >Favorite HP Movie</th>
            <th scope="col" colspan="3"><em>functions</em></th>
          </tr>
        </thead>
        <tbody>
        <?php
        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
        ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['num_watched']; ?></td>
            <td><?php echo $row['fav_movie']; ?></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["id"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
          </tr>
        <?php
        // close the loop
        }
        ?>
        <tbody>
    </table>
    <div>
        <a href="survey.php">Add a new record</a>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>