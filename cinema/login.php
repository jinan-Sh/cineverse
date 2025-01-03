<?php
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Database connection details
    $servername = "localhost";
    $db_username = "root"; 
    $db_password = "";     
    $dbname = "cineverse_db"; 

    // Create a new connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check if connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve user data
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user was found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check if the password is correct
        if (password_verify($password, $user['password'])) {
            // Store user data in session
            $_SESSION['id'] = $user['id']; 
            $_SESSION['username'] = $user['username'];

            // Redirect to booking.php
            header("Location: booking.php");
            exit();
        } else {
            // Incorrect password
            $error_message = "Invalid username or password.";
        }
    } else {
        // No user found with the given username
        $error_message = "Invalid username or password.";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
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
    .login-container {
        background: #ffffff;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px #6e5a11;
        width: 100%;
        max-width: 400px;
        text-align: center;
    }
    .login-container h2 {
        margin-bottom: 20px;
        color: #f39c12;
    }
    .login-container label {
        display: block;
        text-align: left;
        margin: 10px 0 5px;
        font-size: 14px;
        color: #6e5a11;
    }
    .login-container input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 14px;
    }
    .login-container button {
        background-color: #6e5a11;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }
    .login-container button:hover {
        background-color: #f39c12;
    }
    .register-link {
        margin-top: 10px;
        font-size: 14px;
    }
    .register-link a {
        color: #6e5a11;
        text-decoration: none;
    }
    .register-link a:hover {
        text-decoration: underline;
    }
</style>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
    <div class="register-link">
        <p>Don't have an account? <a href="signup.php">Register Now</a></p>
    </div>

    <?php 
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</div>
</body>
</html>
