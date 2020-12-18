<?php
session_start();

include 'connection.php';
$errors = [];

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if ($user['verified'] == 0 and $user['deleted'] != 1) {
            $query = "UPDATE users SET verified=1 WHERE token='$token' ";

            if (mysqli_query($conn, $query)) {
                
                $_SESSION['success_msg'] = "Your email address has been verified successfully.You can procced for login.";
                $errors['verified'] = "Your email address has been verified successfully.";

                header('location: ../login.php');
                exit(0);
            }    
        } else {
            $_SESSION['success_msg'] = "Your email address has been already verified.";
            $errors['already_verified'] = "Your email address has been already verified.";
            header('location: ../login.php');
        }
        
    } else {
        echo "User not found!";
        $_SESSION['error_message'] = "Your registration has not been requested.";
        // $error['error'] = "Your registration has not been requested successfully";
        header('location: ../register.php');
    }
} else {
    echo "No token provided!";
}