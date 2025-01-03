<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="styles.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
</head>
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
<body>
    <div class="schedule-section">
    <h1>Schedule</h1>
        <div class="schedule-dates ">
      
        <?php
 
    $currentDate = new DateTime();

   
    for ($i = 0; $i < 5; $i++) {
        echo '<div class="schedule-item">' . $currentDate->format('F j, Y') . '</div>';
       
        $currentDate->modify('+1 day');
    }
    ?>
    </div>
        <div class="schedule-table">
            <table>
                <tr>
                    <th>Showing Now</th>
                    <th>SCHEDULE IN CINEMA</th>
                </tr>
                <tr >
                    <td>
                        <h2>Moana 2</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>Description</h3>
                        <p>the film continues the journey of Moana as she embarks on new adventures, exploring the vast Pacific Ocean while encountering new characters and challenges along the way.
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">1:00 PM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">1:00 PM</div>
                                <div class="schedule-item">6:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">1:00 pM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td>
                        <h2>Smile 2</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>Description</h3>
                        <p>follows Skye as she navigates her recovery and musical comeback as she prepares for her new world tour. 
                            As she prepping, she meets up with an old friend who is possessed by the Smile entity and becomes the creature's new host
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td>
                        <h2>El Hawa Sultan </h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>Description</h3>
                        <p> The film revolves around a deep friendship between Sara and Ali that dates back to their elementary school days. As the years passed, they became inseparable, sharing every detail of their daily lives. Their lives revolve around a daily routine of meetings, conversations, and shared adventures.
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td>
                        <h2>The Wild Robot</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>Description</h3>
                        <p> After a shipwreck, an intelligent robot called Roz is stranded on an uninhabited island. To survive the harsh environment, Roz bonds with the island's animals and cares for an orphaned baby
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td>
                        <h2>Armor</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>Description</h3>
                        <p>James and his son Casey are armored truck drivers tasked with delivering a suspicious package. After a violent ambush on the road, James and Casey are trapped until they discover the value of what they have been carrying
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td>
                        <h2>Red One </h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>Description</h3>
                        <p> The film follows the head of North Pole security (Dwayne Johnson) teaming up with a notorious hacker (Chris Evans) in order to locate a kidnapped Santa Claus (J. K.
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
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

    
    <script src="scripts/script.js "></script>
</body>

</html>