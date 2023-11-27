<?php
if (isset($_POST['login'])) {
    $Username = $_POST['Username'];
    $password = $_POST['password'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "member";
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check if the user exists with the provided username and password
    $sql = "SELECT * FROM user WHERE Username='$Username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            // User exists, redirect to home.php
            header("Location: home.php");
            exit();
        } else {
            // User doesn't exist
            echo "User not found. Please <a href='signup.php'>signup</a> first.";
        }
    } else {
        // Query execution error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
