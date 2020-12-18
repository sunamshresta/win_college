<?php 
session_start();
require '../Auth/connection.php';
// Add admin
if (isset($_POST['add-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
    $type = 'admin';

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' and type='$type' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $user_query = "INSERT INTO users SET username=?, email=?, token=?, password=?, type=?, verified=1";
        $user_stmt = $conn->prepare($user_query);
        $user_stmt->bind_param('sssss', $username, $email, $token, $password, $type);
        $user_result = $user_stmt->execute();

        if ($user_result) {
            $user_stmt->close();
            
            $_SESSION['success_msg'] = 'Admin has been added successfully.';
            header('location: admin.php');
            exit(0);
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
            header('location: admin_add.php');
        }
    }
}



                           ?>