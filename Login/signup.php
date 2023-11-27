<?php
include 'config.php';

if (isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (Fullname, Username, Password, Email) VALUES ('$fullname', '$username', '$hashedPassword', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('การสมัครสมาชิกเสร็จสมบูรณ์ กรุณาเข้าสู่ระบบ'); window.location.href='/project/Login/login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px; /* Adjust the width as needed */
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        margin-top: 10px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    p {
        text-align: center;
        margin-top: 20px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }
</style>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="signup.php" method="post">
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" required>

            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type="submit" name="signup">Signup</button>
        </form>
        <p>คุณมีบัญชีแล้ว? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>