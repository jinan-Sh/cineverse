<?php
include "connection.php";
session_start();

$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$mobile = $_POST['pNumber'];
$theatre = $_POST['theatre'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['hour'];
$movieid = $_POST['movie_id'];
$order = "CineVerse" . rand(10000, 99999999);
$cust  = "CUST" . rand(1000, 999999);

if (isset($_POST['submit'])) {

  
   


    $query = "INSERT INTO booked (movieID, bookingTheatre, bookingType, bookingDate, bookingTime, bookingFName, bookingLName, bookingPNumber, bookingEmail, amount, ORDERID)
              VALUES ('$movieid', '$theatre', '$type', '$date', '$time', '$fname', '$lname', '$mobile', '$email', 'Not Paid', '$order')";

    if (mysqli_query($con, $query)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CineNest</title>

</head>

<body>
    <center>
        <br><br>
        <h1>Your Reservation </h1>
        <br><br>

        <form method="post" action="pgRedirect.php">
            <table border="1" style="text-align: center;">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><label>ORDER ID</label></td>
                        <td><?php echo $order; ?>
                            <input type="hidden" name="ORDER_ID" value="<?php echo $order; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><label>Name</label></td>
                        <td><?php echo $_POST['fName'] . " " . $_POST['lName']; ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><label>Website </label></td>
                        <td>
                            <?php echo "CineVerse Cinemas"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><label>THEATRE </label></td>
                        <td>
                            <?php echo $_POST['theatre']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><label>TYPE </label></td>
                        <td>
                            <?php echo $_POST['type']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><label>Price</label></td>
                        <td>
                            <?php
                            if ($theatre == "main-hall") {
                                $ta = 20;
                            }
                            if ($theatre == "vip-hall") {
                                $ta = 50;
                            }
                            if ($theatre == "private-hall") {
                                $ta = 90;
                            }

                            ?>

                            <input type="text" name="Price" value="<?php echo $ta; ?>" readonly>
                            <input type="hidden" name="CUST_ID" value="<?php echo $cust; ?>">
                            <input type="hidden" name="INDUSTRY_TYPE_ID" value="retail">
                            <input type="hidden" name="CHANNEL_ID" value="WEB">

                        </td>
                    </tr>


                   
                </tbody>
            </table>
            <p>Paying only at our cinema</p>
            
            <p style=" color: red">If your are not coming you should call to cancel your reservation !(BRING THE ID CODE WITH YOU) </p>
           
        </form>

    </center>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>