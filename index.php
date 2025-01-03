<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>CineVerse : Cinema Universe</title>
</head>
<body>

    <?php
    include "connection.php";
    $sql = "SELECT * FROM movieTable";
    ?>

    <header > 
        <div class="navbar-brand">
    <a href="New Text Document.php">
        <h1 class="navbar-heading">CineVerse</h1>
    </a>
</div>
<div class="navbar-container">
    <nav class="navbar">
        <ul class="navbar-menu">
            <li><a href="New Text Document.php">Home</a></li>
            <li><a href="Scheduleprogram.php">Schedule</a></li>
            <li><a href="Aboutus.php">About Us</a></li>  
            <li><a href="team.php">Our Team</a></li>           
            <li><a href="contact-us.php">Contact</a></li>
        </ul>
    </nav>
</div></header>
<section class="cover-photo">
    <div class="slider-wrapper">
        <div class="slider">
            <img src="img/maxresdefault.jpg" alt="" id="slide-1">
            <img src="img/smil.jpg" alt="" id="slide-2">
            <img src="img/maxresdefault (1).jpg" alt="" id="slide-3">
            <img src="img/armor.jpg" alt="" id="slide-4">
            <img src="img/maxresdefault (2).jpg" alt="" id="slide-5">
            <img src="img/maxresdefault (3).jpg" alt="" id="slide-6">
        </div>
        <div class="slider-nav">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>
            <a href="#slide-4"></a>
            <a href="#slide-5"></a>
            <a href="#slide-6"></a>
        </div>
    
    </div>
    <br> <br> <br> <br> <br> 
    <div id="home-section-1" class="movie-show-container">
        <h1> Showing Now</h1>
        <h3>Book a movie now </h3>

        <div class="movies-container">

<?php
if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        for ($i = 0; $i <= 5; $i++) {
            $row = mysqli_fetch_array($result);
            echo '<div class="movie-box">';
            echo '<img src="' . $row['movieImg'] . '" alt=" ">';
            echo '<div class="movie-info ">';
            echo '<h3>' . $row['movieTitle'] . '</h3>';
            echo '<a href="login.php?redirect=booking.php&id=' . $row['movieID'] . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
            echo '</div>';
            echo '</div>';
        }
   
} }

mysqli_close($con);
?>
</div>
</div>
<div id="home-section-2" class="services-section">
        <h1>How it works</h1>
        <h3>3 Simple steps to book your favourit movie!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Choose your favourite movie</h2>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Reserve your tickets</h2>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Pick your Hall & Enjoy watching</h2>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>
    </div>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title">Explore new movies</h1>
        <h3>Now showing</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/maxresdefault.jpg" alt="">
                <div class="trailer-item-info" data-video="hDZ7y8RP5HE">
                    <h3>Moana 2</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/smil.jpg" alt="">
                <div class="trailer-item-info" data-video="0HY6QFlBzUY">
                    <h3>Smile 2</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/maxresdefault (1).jpg" alt="">
                <div class="trailer-item-info" data-video="GpsR7f66AAQ">
                    <h3>El hawa sultan</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/maxresdefault (2).jpg" alt="">
                <div class="trailer-item-info" data-video="67vbA5ZJdKQ">
                    <h3>The Wild Robot </h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/armor.jpg" alt="">
                <div class="trailer-item-info" data-video="402_wx35uq8">
                    <h3>Armor</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/maxresdefault (3).jpg" alt="">
                <div class="trailer-item-info" data-video="U8XH3W0cMss">
                    <h3>Red One </h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
    </section>

    <footer><div class="footer-section footer-section1">
<div class="footer-brand">
    <a href="New Text Document.php">
        <h1 class="footer-heading">CineVerse</h1>
    </a> 
</div>    
</div>
    <div class="footer-section footer-section2">
    <h2><i class="fas fa-user-alt"></i> Social Media</h2>
    <div class="footer-section-inner-container">
        <span><i class="fab fa-lg fa-facebook-square"></i> Facebook</span>
        <span><i class="fab fa-lg fa-twitter-square"></i> Twitter</span>
        <span><i class="fab fa-lg fa-instagram"></i> Instagram</span>
    </div>
</div>
<footer>
<div class="footer-section  footer-section3">
    <p>© 2002 CineNest Movies. All conditions  are preserved. </p>
    <a>Advertising</a>
    <a>Privacy Policy</a>
    <a href="contact-us.php">Contact</a>
</div>

</footer>
<script src="jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>
    </body>
    </html>
