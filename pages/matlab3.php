<!DOCTYPE html>
<html>
<head>
  <title>Codify - Matlab</title>
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
      <p>“MATLAB is not just a programming language; it’s a way of thinking and solving problems</p>
      <form action="../assets/matlab/Book 3.pdf">
      <button> Read here</button>
      </form>
      <p>Explore other Matlab books <a href="matlab.php"> Here</a></p>
      </div>
      <div class="book-info">  <img src="../assets/matlab/photo 3.jpg"  height="120" width="80">
      <h4>PRACTICAL MATLAB® FOR ENGINEERS PRACTICAL MATLAB</h4>
    </div>
  </section>
  
</body>
</html>