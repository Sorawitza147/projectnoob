<?php
include 'config.php';

// Check if not logged in
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    echo "<script>alert('Please log in to access this page.'); window.location.href='login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Add your additional stylesheets if any -->
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"></a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="Certificate.php" class="nav-link px-2 text-white">Certificate</a></li>
                    <li><a href="Contact.php" class="nav-link px-2 text-white">Contact</a></li>
                    <li><a href="FAQ.php" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="/project/country/index.php" class="nav-link px-2 text-white">search country</a></li>
                </ul>
                <form class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end">
                    <?php
                    // Check if logged in and show username
                    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                      echo "<span class='text-white me-2'>Welcome, " . $_SESSION["Username"] . "</span>";
                        echo "<a button type='button'  href='logout.php' class='btn btn-outline-light me-2'>Logout</a></button>";
                    } else {
                        echo "<a button type='button'  href='login.php' class='btn btn-outline-light me-2'>Login</a></button>";
                        echo "<a button type='button'  href='signup.php' class='btn btn-warning'>Sign up</a></button>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="ask-section">
            <h2>Ask a Question</h2>
            <form id="question-form">
                <input type="text" id="question-input" placeholder="Your question" required>
                <button type="submit">Submit</button>
            </form>
        </section>
        <section id="qa-section">
            <h2>Questions & Answers</h2>
            <ul id="qa-list">
                <!-- Your PHP logic to fetch and display questions and answers goes here -->
                <?php
                // Example questions and answers (replace with actual data from your database)
                $faqs = [
                    ["question" => "What is the meaning of life?", "answer" => "The meaning of life is subjective and varies for each individual."],
                    ["question" => "How do I reset my password?", "answer" => "You can reset your password by visiting the 'Forgot Password' page."],
                    // Add more FAQs as needed
                ];

                foreach ($faqs as $faq) {
                    echo "<li>";
                    echo "<h3>{$faq['question']}</h3>";
                    echo "<p>{$faq['answer']}</p>";
                    echo "</li>";
                }
                ?>
            </ul>
        </section>
    </main>

    <script src="js/bootstrap.min.js"></script>
    <script src="FQA.js"></script>
    <!-- Add your additional scripts if any -->
</body>
</html>
