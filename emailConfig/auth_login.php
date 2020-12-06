<?php
session_start();
$username = "";
$email = "";
$errors = [];

$conn = new mysqli('localhost', 'root', '', 'win_college');

// Login
if (isset($_POST['login-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE username=? OR email=? AND verified=1 LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            print_r($result);

            if (mysqli_num_rows($result) > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) { // if password matches
                    $stmt->close();

                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['verified'] = $user['verified'];
                    $_SESSION['type'] = $user['type'];
                    $_SESSION['success_msg'] = 'Login successful !';            

                    if ($user['type'] == 'student') {
                        header('location: student/index.php');
                    } elseif ($user['type'] == 'admin') {
                        header('location: admin/index.php');
                    }
                    exit(0);
                }
            } elseif($_SESSION['verified'] == 0) {
                $_SESSION['error_message'] = 'Verify your email to login.';
                $errors['verify_email'] = 'Verify your email to login.';
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}