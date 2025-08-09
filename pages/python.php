<!DOCTYPE html>
<html>
    <head>
        <title> Codify - Python Books</title>
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
            <h2 class="category-title">Python Language Books</h2>
            <br>
            <div class="book-container">
                <div class="book">
                    <img src="../assets/python/photo 1.jpg" alt="Book 1" height="120" width="80">
                    <a href="python1.php"> Learn to Program with Python 3- A Step-By-Step Guide to Programming</a>
                </div>
                <div class="book">
                    <img src="../assets/python/photo 2.jpg" alt="Book 2" height="120" width="80">
                    <a href="python2.php">Python Programming for the Absolute Beginner</a>
                </div>
                <div class="book">
                    <img src="../assets/python/photo 3.jpg" alt="Book 3" height="120" width="80">
                    <a href="python3.php">Python Programming for Beginners, Python Programming for Intermediates</a>
                </div>
                <div class="book">
                    <img src="../assets/python/photo 4.jpg" alt="Book 4" height="120" width="80">
                    <a href="python4.php">Python Practical Python Programming For Beginners and Experts</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <form action="categories.php">
            <button> ← Back </button>
         </form>

    </body>
</html>