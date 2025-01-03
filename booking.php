<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$db_username = "root"; 
$db_password = "";     
$dbname = "cineverse_db"; 

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['id'];

// Query for user's bookings
$sql = "SELECT * FROM booked WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Booking</title>
</head>
<body>
<header > 
        <div class="navbar-brand">
    <a href="index.php">
        <h1 class="navbar-heading">CineVerse</h1>
    </a>
</div>
<div class="navbar-container">
    <nav class="navbar">
        <ul class="navbar-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Scheduleprogram.php">Schedule</a></li>
            <li><a href="Aboutus.php">About Us</a></li>  
            <li><a href="team.php">Our Team</a></li>           
            <li><a href="contact-us.php">Contact</a></li>
        </ul>
    </nav>
</div></header>
<br> <br> <br> <br>

<div id="home-section-1" class="movie-show-container">
    <h1>Showing Now</h1>
    <h3>Book a movie now</h3>

    <div class="movies-container">
        <?php
       
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Booking ID: " . $row['bookingID'] . " - Movie: " . $row['movieID'] . "<br>";
            }
        }

        // Query for available movies
        $sql_movies = "SELECT m.movieImg, m.movieTitle, m.movieID FROM movietable m";
        $movie_result = $conn->query($sql_movies);

        if ($movie_result->num_rows > 0) {
            while ($row = $movie_result->fetch_assoc()) {
                echo '<div class="movie-box">';
                echo '<img src="' . $row['movieImg'] . '" alt=" ">';
                echo '<div class="movie-info ">';
                echo '<h3>' . $row['movieTitle'] . '</h3>';
                echo '<a href="bookingprocess.php?id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No movies available.";
        }
        
        // Free movie result
        $movie_result->free();
        
        // Close the statement and connection after all queries
        $stmt->close();
        $conn->close();
        ?>
    </div>
</div>

</body>
</html>
