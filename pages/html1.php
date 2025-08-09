<!DOCTYPE html>
<html>
<head>
  <title>Codify - html</title>
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
      <p>In the world of web development, HTML and CSS are the dynamic duo that brings life to static web pages.</p>
      <form action="../assets/html_css/Book 1.pdf">
      <button> Read here</button>
      </form>
      <p>Explore other HTML&CSS books <a href="php.php"> Here</a></p>
    </div>
    <div class="book-info">  <img src="../assets/html_css/photo 1.jpg"  height="120" width="80">
      <h4>HTML & CSS Crash Course- Learn html and css with easy to follow-step-by-step tutorials</h4>
    </div>
  </section>
  
</body>
</html>