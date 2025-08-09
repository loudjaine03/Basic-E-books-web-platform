
        <?php
                session_start();

                 // if already logged in
                if(isset($_SESSION['user_id'])) {
                header("Location: home.php");
                exit;
                }

                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    include 'db_connection.php';
                    
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $sql = "SELECT id, email, password FROM users WHERE email = ?";

                    if($stmt = $conn->prepare($sql))
                    {
                        $stmt->bind_param("s", $email);
                        if($stmt->execute()) 
                        {
                            $stmt->store_result();
                            if($stmt->num_rows == 1)
                            {
                                $stmt->bind_result($id, $db_email, $db_password);
                                if($stmt->fetch())
                                {
                                    if($password === $db_password) 
                                    {
                                        session_start();
                                        $_SESSION['user_id'] = $id;
                                        $_SESSION['email'] = $db_email;
                                        header("Location: home.php");
                                        exit;
                                    } else 
                                    {
                                        $error = "Invalid password.";
                                    }
                                }
                            } else
                            {

                                $error = "No account found with that email.";
                            }
                        } else
                        {
                            $error = "Oops! Something went wrong. Please try again later.";
                        }
                    $stmt->close();
                    }
                }

            
             if(isset($error)) 
            { 
                 echo $error; 
            } 
        
        ?>
 