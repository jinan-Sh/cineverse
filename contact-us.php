<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>
    
   
<header>
<div class="navbar-brand">
    <a href="index.php">
        <h1 class="navbar-heading">CineVerse</h1>
    </a>
</div>
<?php
    include "connection.php";
    ?>
   <div class="navbar-container">
    <nav class="navbar">
        <ul class="navbar-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="scheduleprogram.php">Schedule</a></li>
           
            <li><a href="Aboutus.php">About us </a></li>     
            <li><a href="team.php"> Our Team </a></li>              
            <li><a href="contact-us.php">Contact</a></li>
        </ul>
    </nav>
</div></header>
<body>
<div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Contact</h1>
            <p>Leave for us your feedback or any question you want! </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName"><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                   <?php
                if (isset($_POST['submit'])) {
                    $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '" . $_POST["fName"] . "',
                                        '" . $_POST["lName"] . "',
                                        '" . $_POST["eMail"] . "',
                                        '" . $_POST["feedback"] . "')";
                    $add = mysqli_query($con, $insert_query);
                    if (empty($firstName)) {
                        $errors[] = "First Name is required.";
                    }  elseif (!preg_match("/^[a-zA-Z\s]+$/", $firstName)) {
                        $errors[] = "First Name can only contain letters and spaces.";
                    }
                    if (!empty($lastName) && !preg_match("/^[a-zA-Z\s]+$/", $lastName)) {
                        $errors[] = "Last Name can only contain letters and spaces.";
                    }
                    if (empty($email)) {
                        $errors[] = "Email is required.";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = "Please enter a valid email address.";
                    }
                
                   
                
                  
                    if (empty($feedback)) {
                        $errors[] = "Feedback is required.";
                    }
                
                  
                    if (!empty($errors)) {
                        echo "<ul>";
                        foreach ($errors as $error) {
                            echo "<li style='color:red;'>$error</li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<p style='color:green;'>Thank you for your feedback!</p>";
                        
                    }
                }
                ?>
               
            </form>

        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Address & Info</h1>
            <h3>Phone Numbers</h3>
            <p><a href="tel:01011391148">+961 79116268</a><br>
                <a href="tel:01011391148">+961 79116269 </a></p>
            <h3>Address</h3>
            <p>VG4P+594, Hazmieh, Lebanon ,Beirut City Center </p>
            <h3>E-mail</h3>
            <p><a href="mailto:shhadehjinan@gmail.com">cinemareservation@gmail.com</a></p>
        </div>
    </div>
    <div style="width: 75%; height: 350px; margin: 15%;">
        <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13252.422322065135!2d35.5295337!3d33.8611698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f179885368535%3A0x936ce2fa0ac8f0c0!2sVOX%20Cinemas%20City%20Centre%20Beirut!5e0!3m2!1sen!2slb!4v1722265471553!5m2!1sen!2slb" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
        </div>
    </div>
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
<div class="footer-section  footer-section3">
    <p>© 2002 CineNest Movies. All conditions  are preserved. </p>
    <a>Advertising</a>
    <a>Privacy Policy</a>
    <a href="contact-us.php">Contact</a>
</div></footer>
    
    <script src="script.js "></script>
</body>

</html>


