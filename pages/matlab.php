<!DOCTYPE html>
<html>
    <head>
        <title> Codify - Matlab</title>
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
            <h2 class="category-title">Matlab Language Books</h2>
            <br>
            <div class="book-container">
                <div class="book">
                    <img src="../assets/matlab/photo 1.jpg" alt="Book 1" height="120" width="80">
                    <a href="matlab1.php"> Programming for Computations - MATLAB-Octave- A Gentle Introduction to Numerical Simulations with MATLAB-Octave </a>
                </div>
                <div class="book">
                    <img src="../assets/matlab/photo 2.jpg" alt="Book 2" height="120" width="80">
                    <a href="matlab2.php">MATLAB Programming Fundamentals - MathWorks</a>
                </div>
                <div class="book">
                    <img src="../assets/matlab/photo 3.jpg" alt="Book 3" height="120" width="80">
                    <a href="matlab3.php">PRACTICAL MATLAB® FOR ENGINEERS PRACTICAL MATLAB</a>
                </div>
                
                
            </div>
        </div>
        <br><br><br><br>
        <form action="categories.php">
            <button> ← Back </button>
    </body>
</html>