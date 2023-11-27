<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../time.css">
</head>
  <style>
    .animated-text::after {
    content: "|";
    animation: blink-caret 0.75s infinite alternate;
}

@keyframes blink-caret {
    from, to {
        color: transparent;
    }
    50% {
        color: #fff;
    }
}   
  </style>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="../Menu/home.php" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="../Menu/Certificate.php" class="nav-link px-2 text-white">Certificate</a></li>
              <li><a href="../Menu/Contact.php" class="nav-link px-2 text-white">Contact</a></li>
              <li><a href="../Menu/FAQ.php" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="/project/country/index.php" class="nav-link px-2 text-white">search country</a></li>
            </ul>
            
            <form class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <?php
              // session_start(); // ไม่ต้อง start session ซ้ำ
              // ตรวจสอบว่าล็อกอินแล้วหรือไม่
              if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                echo "<span class='text-white me-2'>ยินดีต้อนรับคุณ: " . $_SESSION["Username"] . "</span>";
                echo "<a button type='button'  href='/project/Login/logout.php' class='btn btn-outline-light me-2'>Logout</a></button>";
            } else {
                echo "<a button type='button'  href='/project/Login/login.php' class='btn btn-outline-light me-2'>Login</a></button>";
                echo "<a button type='button'  href='/project/Login/signup.php' class='btn btn-warning'>Sign up</a></button>";
            }            
              ?>
            </div>
          </div>
        </div>
    </header>
    
    <baby>
        <div class="clock">
            <span id="time"></span>
        </div>
        
        <div class="gpt">
        <center><p><h1 class='animated-text'>This is the work of ChatGPT</h1></p></center>";
        </div>
    </baby>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../time.js"></script>
    <script src="../gpt.js"></script>       
</body>
</html>
