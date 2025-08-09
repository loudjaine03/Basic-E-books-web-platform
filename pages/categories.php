<!DOCTYPE html>
<html>
  <head>
      <title> Codify - Books</title>
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
        </nav>
    </header>
    <video autoplay muted id="video">
      <source src="../images/bg2.mp4" type="video/mp4">
    </video>
    <div class="courses">
      <form action="c.php">
        <button> <strong> C language </strong></button>
      </form>
      <form action="php.php">
        <button> <strong> PHP </strong> </button>
      </form>
      <form action="java.php">
        <button><strong> Java </strong> </button>
      </form>
      <form action="js.php">
        <button> <strong> Javascript </strong></button>
      </form>
      <form action="html_css.php">
        <button><strong> HTML & CSS </strong></button>
      </form>
      <form action="python.php">
        <button> <strong>Python </strong></button>
      </form>
      <form action="matlab.php">
        <button><strong> Matlab </strong></button>
      </form>
    </div>
    <form action="home.php">
      <button> ← Back </button>
    </form>
  </body>

</html>