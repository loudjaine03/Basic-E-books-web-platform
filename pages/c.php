<!DOCTYPE html>
<html>
    <head>
        <title> Codify - C Books</title>
        <link rel="stylesheet" href="../styles/style2.css">
        <link rel="icon" type="image/png" href="../images/icon.png" >
    </head>
    <body>
        <header class="header">
                    <div class="logo">
                        <img src="../images/logo.png" alt="Learnify Logo" width="150" height="auto" >
                    </div>
                    <?php
                        session_start();
                
                        if (!isset($_SESSION['user_id']))
                        {
                            
                            header("Location: login.php");
                         exit;
                        }
                
                        include 'db_connection.php';
                      
                      if ($conn->connect_error)
                        {
                          die("Connection failed: " . $conn->connect_error);
                        }
                
                    ?> 
                    <nav class="navigation"> 
                      <h3> <a href="profile.php"> Profile </a>  </h3>
                    </nav>
        </header>
        <img src="../images/bg 3.jpg" id="background" >
        <div class="container">
            <h2 class="category-title">C Language Books</h2>
            <br>
            <div class="book-container">
                <div class="book">
                    <img src="../assets/c/photo1.jpg" alt="Book 1" height="120" width="80">
                    <a href="c_book1.php">C Programming Language: The Ultimate Beginner's Guide</a>
                </div>
                <div class="book">
                    <img src="../assets/c/photo 2.jpg" alt="Book 2" height="120" width="80">
                    <a href="c_book2.php">C Programming for Arduino</a>
                </div>
                <div class="book">
                    <img src="../assets/c/photo 3.jpg" alt="Book 3" height="120" width="80">
                    <a href="c_book3.php">Learn C Programming; C Programming Language</a>
                </div>
                <div class="book">
                    <img src="../assets/c/photo 4.jpg" alt="Book 4" height="120" width="80">
                    <a href="c_book4.php">Learn to Program with C</a>
                </div>              
            </div>
        </div>
        <br><br><br><br>
        <form action="categories.php">
            <button> ← Back </button>
         </form>
    </body>

</html>
