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

            // Show welcome message
            echo "ยินดีต้อนรับ, " . $_SESSION["Username"];

            // Redirect to home page after a delay (for demonstration purposes)
            header("refresh:2.5;url=../Menu/home.php");
            exit();
        } else {
            // Login failed
            echo "ชื่อผู้ใช้หรือรหัสผ่านผิด";
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
    <link rel="stylesheet" href="../Login/custom.css"/>
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
            background-color: #45a049;
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
        <h2>Login</h2>
        <form action="/project/Login/login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
        <p>ไม่มีบัญชีใช่หรือไม่? <a href="/project/Login/signup.php">Signup here</a></p>
    </div>
</body>
</html>
