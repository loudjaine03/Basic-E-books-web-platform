<!DOCTYPE html>
<html>
  <head>
    <title>Codify - Sign Up</title>
    <link rel="stylesheet" href="../styles/style2.css">
  </head>
  <body>
      <video autoplay muted id="video">
        <source src="../images/bg1.mp4" type="video/mp4">
      </video>
    <div class="formulaire1">
      <?php
          include 'db_connection.php';
          if ($_SERVER["REQUEST_METHOD"] == "POST") 
          {
          $username = $_POST['username'];
          $full_name = $_POST['full_name'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          // Hash the password for security
          //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

          $stmt = $conn->prepare("INSERT INTO users (username, full_name, email, password) VALUES (?, ?, ?, ?)");
          $stmt->bind_param("ssss", $username, $full_name, $email, $password);

          if ($stmt->execute()) 
          {
            $last_id = $conn->insert_id;
            echo "Signup successful!";
          }
          else 
          {
            echo "Error: " . $stmt->error;
          }
          $stmt->close();
          $conn->close();
        }
      ?>
      <br> <br>
      <form action="login.html" >
        <button class="login"> Log In </button>
      </form>
    </div>

  </body>
</html>