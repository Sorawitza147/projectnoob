<?php
include '../Login/config.php';

// Check if not logged in
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    echo "<script>alert('Please log in to access this page.'); window.location.href='../Login/login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url('img/img.gif');
            background-position: center;
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container1 {
            background-color: #fff;
        }

        header {
            background-color: #343a40;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="headerr">
    <header>
        <div class="container d-flex justify-content-between">
          <div class="d-flex align-items-center">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="../Menu/Certificate.php" class="nav-link px-2 text-white">Certificate</a></li>
              <li><a href="../Menu/Contact.php" class="nav-link px-2 text-white">Contact</a></li>
              <li><a href="../Menu/FAQ.php" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="../country/index.php" class="nav-link px-2 text-white">Search Country</a></li>
            </ul>
          </div>
    
            <div class="text-end">
              <?php
              if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                echo "<span class='text-white me-2'>ยินดีต้อนรับคุณ: " . $_SESSION["Username"] . "</span>";
                echo "<a button type='button'  href='../Login/logout.php' class='btn btn-outline-light me-2'>Logout</a></button>";
            } else {
                echo "<a button type='button'  href='../Login/login.php' class='btn btn-outline-light me-2'>Login</a></button>";
                echo "<a button type='button'  href='../Login/signup.php' class='btn btn-warning'>Sign up</a></button>";
            }            
              ?>
            </div>
        </div>
    </header>
        </div>
    <div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 mx-auto bg-light rounded p-5">
                <h5 class="text-center font-weight-bold">Country</h5>
                <hr class="my-1">
                <h5 class="text-center text-secondary">Country In The Search Box.</h5>
                <form action="search.php" method="POST" class="p-3" style="position: relative;">
                    <div class="input-group">
                    <input type="search" name="search" id="search" class="form-control border-info rounded-0 form-control-lg" placeholder="Search Country..." autocomplete="off" required>
                        <div class="input-group-append">
                        <input type="submit" name="submit" value="Search" class="btn btn-warning rounded-0">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="list-group" style="position: absolute; width: 400px;" id="show-list"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="main.js"></script>

</body>
</html>
