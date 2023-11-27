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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../Certificate.css">
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"></a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                      <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
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
                    // Check if logged in and show username
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
      <section class="gallery min-vh-100">
        <div class="container-lg">
           <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
              <div class="col">
                 <img src="../img/1.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="../img/2.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="../img/3.jpg" class="gallery-item" alt="gallery">
              </div>
           </div>
        </div>
     </section>
   
   <!-- Modal -->
   <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <img src="img/1.jpg" class="modal-img" alt="modal img">
         </div>
       </div>
     </div>
   </div>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../Certificate.js"></script>
</body>
</html>
