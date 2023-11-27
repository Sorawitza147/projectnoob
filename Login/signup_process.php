<?php
if (isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $Username = $_POST['Username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database (modify these with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "member";
    $conn = new mysqli($servername, $username, $password, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the username already exists
    $checkUsernameQuery = "SELECT * FROM user WHERE Username = '$Username'";
    $result = $conn->query($checkUsernameQuery);

    if ($result->num_rows > 0) {
        // Username already exists
        echo "Username already exists. Please use a different Username.";
    } else {
        // Insert new user
        $sql = "INSERT INTO user (Fullname, Username, PhoneNumber, Email, Password) VALUES ('$fullname', '$Username', '$phonenumber', '$email', '$password')";
        $result = $conn->query($sql);

        if ($result) {
            echo "Signup successful. <a href='/project/Login/login.php'>Login</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
