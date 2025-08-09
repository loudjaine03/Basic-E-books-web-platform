<!DOCTYPE html>
<html>
    <head>
        <title> Codify - JS Books</title>
        <link rel="stylesheet" href="../styles/style2.css">
        <link rel="icon" type="image/png" href="../images/icon.png" >
    </head>
    <body>
        <header class="header">
            <div class="logo">
               <img src="../images/logo.png" alt="Codify Logo" width="150" height="auto">
            </div>
            <?php
            session_start(); 
        
            
            if (!isset($_SESSION['user_id'])) {
                
                header("Location: login.php");
                exit;
            }
        
            
            include 'db_connection.php';
        
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            ?> 
            <nav class="navigation">
            
              <h3> <a href="profile.php"> Profile </a>  </h3>
              </form>
            </nav>
        </header>
        <img src="../images/bg 3.jpg" id="background" >
        <div class="container">
            <h2 class="category-title">JavaScript Language Books</h2>
            <br>
            <div class="book-container">
                <div class="book">
                    <img src="../assets/js/photo 1.jpg" alt="Book 1" height="120" width="80">
                    <a href="js_book1.php"> Functional Programming in JavaScript- How to improve your JavaScript programs</a>
                </div>
                <div class="book">
                    <img src="../assets/js/photo 2.jpg" alt="Book 2" height="120" width="80">
                    <a href="js_book2.php">JavaScript- JavaScript For Beginners - Learn JavaScript Programming with ease in HALF THE TIME</a>
                </div>
                <div class="book">
                    <img src="../assets/js/photo 3.jpg" alt="Book 3" height="120" width="80">
                    <a href="js_book3.php">Javascript- Javascript Programming For Absolute Beginners- Ultimate Guide To Javascript Coding</a>
                </div>
            </div>
       </div>
       <br><br><br><br>
        <form action="categories.php">
            <button> ← Back </button>
    </body>
</html>