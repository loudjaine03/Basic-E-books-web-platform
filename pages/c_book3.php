<!DOCTYPE html>
<html>
<head>
  <title>Codify - C</title>
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
    ?>
    <nav class="navigation">
      <h3> <a href="profile.php"> Profile </a> </h3>
    </nav>
  </header>
  <img src="../images/bg 5.jpg" id="background" >
  <section class="container1">
    <div class="text-content">
      <p>C Programming is one of the most widely used programming languages in the world. Its applications span across various fields, including computer science, telecommunications, and embedded devices. If you’re interested in learning how to program in C, We’ve got you covered!</p>
      <form action="../assets/c/Book3.pdf">
      <button> Read here</button>
      </form>
      <p>Explore other C books <a href="c.php"> Here</a></p>
    </div>
    <div class="book-info">  <img src="../assets/c/photo 3.jpg" alt="Book 1" height="120" width="80">
      <h4>Learn C Programming; C Programming Language</h4>
      
    </div>
  </section>
  
</body>
</html>