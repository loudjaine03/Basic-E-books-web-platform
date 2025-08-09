<!DOCTYPE html>
<html>
    <head>
        <title> Codify -Java Books</title>
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
        <h2 class="category-title">Java Language Books</h2>
        <div class="book-container">
            <div class="book">
                <img src="../assets/java/photo 1.jpg" alt="Book 1" height="120" width="80">
                <a href="java_book1.php"> 100+ Java Programs with Output- Useful collection of Java Programs</a>
            </div>
            <div class="book">
                <img src="../assets/java/photo 2.jpg" alt="Book 2" height="120" width="80">
                <a href="java_book2.php">Easy Java Programming for Beginners, Your Step-By-Step Guide to Learning Java Programming</a>
            </div>
            <div class="book">
                <img src="../assets/java/photo 3.jpg"  height="120" width="80">
                <a href="java_book3.php">Java for Absolute Beginners- Learn to Program the Fundamentals the Java 9+ Way</a>
            </div>
            <div class="book">
                <img src="../assets/java/photo 4.jpg" alt="Book 4" height="120" width="80">
                <a href="java_book4.php">Java Programming For Beginners - A Simple Start to Java Programming </a>
            </div>
            
        </div>
    </div>
    <br><br><br><br>
    <form action="categories.php">
        <button> ← Back </button>
    </form>

    </body>
</html>