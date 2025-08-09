<!DOCTYPE html>
<html>
<head>
  <title>Codify - JS</title>
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
      <p>“I think everybody in this country should learn how to program a computer because it teaches you how to think.” Steve Jobs🌟</p>
      <form action="../assets/js/Book 2.pdf">
      <button> Read here</button>
      </form>
      <p>Explore other JS books <a href="js.php"> Here</a></p>
    </div>
    <div class="book-info">  <img src="../assets/js/photo 2.jpg"  height="120" width="80">
      <h4>JavaScript- JavaScript For Beginners - Learn JavaScript Programming with ease in HALF THE TIME</h4>
      
    </div>
  </section>
  
</body>
</html>