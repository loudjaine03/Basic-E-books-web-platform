<!DOCTYPE html>
<html>
<head>
  <title>Codify - Java</title>
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
      <p>Java, the third most popular programming language in 2022 according to GitHub, remains a versatile and widely adopted choice for developers worldwide. Its robustness, extensive libraries, and cross-platform capabilities make it a go-to language for building everything from web applications to Android mobile apps. 🚀</p>
      <form action="../assets/java/Book 4.pdf">
      <button> Read here</button>
      </form>
      <p>Explore other JAVA books <a href="java.php"> Here</a></p>
    </div>
    <div class="book-info">  <img src="../assets/java/photo 4.jpg" height="120" width="80">
      <h4>Java Programming For Beginners - A Simple Start to Java Programming</h4>
      
    </div>
  </section>
  
</body>
</html>