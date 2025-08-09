<!DOCTYPE html>
<html lang="en">
<head>
    <title>Codify - Reset Password</title>
        <link rel="stylesheet" href="../styles/style2.css">
        <link rel="icon" type="image/png" href="../images/icon.png" >

</head>
<body>
    <img src="../images/bg 4.jpg" id="background" >
    <div class="reset">
    <h2>Reset Password</h2>
    <form  method="post">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
        <label for="password">New Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Submit">
    </form>
    





<?php
$message="";
$valid='true';
include 'db_connection.php';

session_start();

if(isset($_POST['token']) && isset($_POST['password'])) {

    $token = $_POST['token'];
    $new_password = $_POST['password'];

    $sql = "UPDATE users SET password = ? WHERE reset_token = ?";
    
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $new_password, $token);
        if ($stmt->execute()) {
            echo "Password updated successfully!";
            
        } else {
            
            echo "Error updating password: " . $conn->error;
        }
        $stmt->close();
    } else {
        
        echo "Error preparing SQL statement: " . $conn->error;
    }
} 

?>

            <br> <br> 
            <form action="login.php">
            <input type="submit" value="Log In">
            </form>

</div>
</body>
</html>






