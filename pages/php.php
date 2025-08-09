<!DOCTYPE html>
<html>
    <head>
        <title> Codify - PHP Books</title>
        <link rel="icon" type="image/png" href="../images/icon.png" >
        <link rel="stylesheet" href="../styles/style2.css">
    </head>
    <body>
        <header class="header">
            <div class="logo">
              <img src="../images/logo.png" alt="Learnify Logo" width="150" height="auto">
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
            <h2 class="category-title">PHP Language Books</h2>
            <br>
            <div class="book-container">
                <div class="book">
                    <img src="../assets/php/photo 1.jpg" alt="Book 1" height="120" width="80">
                    <a href="php_book1.php"> Acodemy. Php- Learn PHP In A DAY!</a>
                </div>
                <div class="book">
                    <img src="../assets/php/photo 2.jpg" alt="Book 2" height="120" width="80">
                    <a href="php_book2.php">Core PHP Programming Using PHP to Build Dynamic Web Sites</a>
                </div>
                <div class="book">
                    <img src="../assets/php/photo 3.jpg" alt="Book 3" height="120" width="80">
                    <a href="php_book3.php">PHP- Learn PHP in 24 Hours or Less</a>
                </div>
                <div class="book">
                    <img src="../assets/php/photo 4.jpg" alt="Book 4" height="120" width="80">
                    <a href="php_book4.php">PHP Crush Course! Learn PHP Programming in 4 hours! </a>
                </div>       
            </div>
        </div>
        <br><br><br><br>
        <form action="categories.php">
            <button> ← Back </button>
        </form>
    </body>
</html>