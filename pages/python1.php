<!DOCTYPE html>
<html>
<head>
  <title>Codify - Python</title>
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
      <p>“Python has been an important part of Google since the beginning, and remains so as the system grows and evolves. Today dozens of Google engineers use Python, and we’re looking for more people with skills in this language.” — Peter Norvig, Director of Search Quality at Google, Inc.</p>
      <form action="../assets/python/Book 1.pdf">
      <button> Read here</button>
      </form>
      <p>Explore other Python books <a href="python.php"> Here</a></p>
    </div>
    <div class="book-info">  <img src="../assets/python/photo 1.jpg"  height="120" width="80">
      <h4>Learn to Program with Python 3- A Step-By-Step Guide to Programming</h4>
    </div>
  </section>
  
</body>
</html>