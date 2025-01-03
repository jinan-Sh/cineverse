<?php
// Check if form data is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Database connection (adjust with your credentials)
    $servername = "localhost";
    $db_username = "root"; // Changed variable name for clarity
    $db_password = "";
    $dbname = "cineverse_db"; // Use your database name

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email already exists in the database
    $sql_check = "SELECT * FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        // Email already exists
        $alert_message = "<div class='error-message'>This email is already registered. Please use a different email.</div>";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // SQL query to insert user data
        $sql_insert = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

        // Prepare statement
        $stmt_insert = $conn->prepare($sql_insert);
        if ($stmt_insert) {
            $stmt_insert->bind_param("sss", $username, $email, $hashed_password);

            // Execute query
            if ($stmt_insert->execute()) {
                $alert_message = "<div class='success-message'>
                                    <h2>Sign-up successful!</h2>
                                    <p>Thank you for signing up. <a href='login.php'>Login here</a> to access your account.</p>
                                  </div>";
            } else {
                $alert_message = "<div class='error-message'>Error: " . $stmt_insert->error . "</div>";
            }

            // Close insert statement
            $stmt_insert->close();
        } else {
            $alert_message = "<div class='error-message'>Error: " . $conn->error . "</div>";
        }
    }

    // Close check statement
    $stmt_check->close();

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
      
        .success-message {
          
            color:  #6e5a11; 
            padding: 20px;
          
       
            text-align: center;
            width: 100%;
            max-width: 400px;
            margin: 10px 0;
        }

        .error-message {
           
            color:  #6e5a11; 
            padding: 20px;
         
           
            text-align: center;
            width: 100%;
            max-width: 400px;
            margin: 10px 0;
        }

        .success-message h2, .error-message h2 {
            margin-bottom: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .success-message a, .error-message a {
            color: #f39c12; 
            text-decoration: none;
            font-weight: bold;
        }

        .success-message a:hover, .error-message a:hover {
            text-decoration: underline;
        }

       
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .signup-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px #6e5a11;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .signup-container h2 {
            margin-bottom: 20px;
            color: #f39c12;
        }

        .signup-container label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-size: 14px;
            color: #6e5a11;
        }

        .signup-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .signup-container button {
            background-color: #6e5a11;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .signup-container button:hover {
            background-color: #f39c12;
        }

        .login-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .login-link a {
            color: #6e5a11;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <!-- Display the alert message (if any) -->
        <?php if (isset($alert_message)) echo $alert_message; ?>

        <form action="signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
