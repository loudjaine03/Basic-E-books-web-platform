<?php
require 'vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;

include 'db_connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])) {
    $email = $_POST['email'];
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "Invalid email address.";
        exit;
    }



 
        $sql = "SELECT id FROM users WHERE email = ?";
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows == 1) {
        
                $token = bin2hex(random_bytes(16));
        
                $sql_update = "UPDATE users SET reset_token = ? WHERE email = ?";
                if($stmt_update = $conn->prepare($sql_update)) {
                    $stmt_update->bind_param("ss", $token, $email);
                    $stmt_update->execute();
                    $stmt_update->close();
                }

                $base_url = 'http://http://localhost:3000/reset_password_process.php' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);


                $reset_link = "http://http://localhost:3000/reset_password_process.php?token=$token";
                 $subject = "Password Reset";
                $message = "Click the following link to reset your password: $reset_link";
        
                header("Location: reset_password_sent.html");
            } else {
                header("Location: forgot_password.php?error=email_not_found");
                exit;
            }
            $stmt->close();
        }
        $conn->close();

    $mail = new PHPMailer(true); 
    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = ''; //email
        $mail->Password = ''; //password
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 

        
        $mail->setFrom('codifyforebooks@gmail.com');
        $mail->addAddress($email);

        
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        $mail->Body = $message;

        if ($mail->send()) {
            echo 'Password reset email sent successfully!';
        } else {
            echo 'Error sending password reset email: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    
    echo "Error: Email address not provided.";
}
?>


