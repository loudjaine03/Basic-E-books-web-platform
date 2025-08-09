<!DOCTYPE html>
<html>
  <head>
    <title>Codify - Home</title>
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
        if (!isset($_SESSION['user_id']))
        {
         header("Location: login.html");
          exit;
        }
       include 'db_connection.php';
       include 'welcome.php'
      ?> 

      <nav class="navigation">
        <h3> <a href="profile.php"> Profile </a> </h3>
      </nav>
    </header>

    <main class="main">
      <video autoplay muted id="video">
       <source src="../images/bg.mp4" type="video/mp4">
      </video>
      <section class="hero">
        <p> Explore a range of popular coding books and build your programming skills! </p>
        <button class="explore-btn"> <a href="categories.php" > Explore Now </a> </button>
      </section>
        <section class="searchbar">
          <form action="search.php" method="GET">
           <input type="text" id="search" name="search" placeholder="Enter book title or category">
           <br>
           <button type="submit"><strong>Search</strong></button>
          </form>
        </section>
     
    </main>

  </body>
</html>