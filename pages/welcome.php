<?php
$user_id = $_SESSION['user_id'];
        $sql = "SELECT username FROM users WHERE id = ?";
        if ($stmt = $conn->prepare($sql))
        {
          $stmt->bind_param("i", $user_id);
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($username);
          $stmt->fetch();
          $stmt->close();
        }
        echo "<h2 class='welcome-section'>  Welcome <span class='username-style'> $username </span> !</h2>";
        ?>