<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

include 'db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information from database
$user_id = $_SESSION['user_id'];
$sql = "SELECT username FROM users WHERE id = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($username);
    $stmt->fetch();
    $stmt->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Codify - User Information</title>
    <link rel="icon" type="image/png" href="../images/icon.png">
    <link rel="stylesheet" href="../styles/style2.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="../images/logo.png" alt="Codify Logo" width="150">
    </div>

    <h2 class='welcome-section'>Welcome <span class='username-style'><?php echo $username; ?></span>!</h2>

    <nav class="navigation">
    <h3> <a href="Home.php">Home</a> </h3>
    </nav>
</header>

<img src="../images/bg 4.jpg" id="background">

<h2 class="profile1">Profile</h2>
<div class="profile">
    <?php
    // Retrieve full user details
    $sql = "SELECT username, full_name, email FROM users WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($username, $full_name, $email);
        $stmt->fetch();
        $stmt->close();
    }

    echo "<p><strong>Name :</strong> $full_name</p>";
    echo "<p><strong>Username :</strong> $username</p>";
    echo "<p><strong>Email :</strong> $email</p>";

    // Close DB connection
    $conn->close();
    ?>
</div>

<form action="logout.php">
    <button class="logout">Log Out</button>
</form>

</body>
</html>
