<?php
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE Username='$username'";
    $result = $conn->query($sql);

    if ($result) {
        // Check if the query was successful
        if ($result->num_rows == 1) {
            // Login successful
            $row = $result->fetch_assoc();
            $_SESSION["logged_in"] = true;
            $_SESSION["Username"] = $row['Username'];
            header("Location: home.php"); // Redirect to home page
            exit();
        } else {
            // Login failed
            echo "Invalid Username or password.";
        }
    } else {
        // Query error
        echo "Query error: " . $conn->error;
    }
} else {
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Signup here</a></p>
    </div>
</body>
</html>
