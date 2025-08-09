<!DOCTYPE html>
<html>
    <head>
        <title> Codify - HTML & CSS Books</title>
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
          <h2 class="category-title">HTML & CSS Languages Books</h2>
         <br>
         <div class="book-container">
            <div class="book">
                <img src="../assets/html_css/photo 1.jpg" alt="Book 1" height="120" width="80">
                <a href="html2.php"> HTML & CSS Crash Course- Learn html and css with easy to follow-step-by-step tutorials</a>
            </div>
            <div class="book">
                <img src="../assets/html_css/photo 2.jpg" alt="Book 2" height="120" width="80">
                <a href="html2.php">web design with html and css digital classroom</a>
            </div>
            
            
        </div>
    </div>
    <br><br><br><br>
    <form action="categories.php">
        <button> ← Back </button>
    </form>
    </body>
</html>