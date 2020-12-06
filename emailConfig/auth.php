<?php
session_start();
include_once 'send.php';
$username = "";
$email = "";
$errors = [];
$success = [];

$conn = new mysqli('localhost', 'root', '', 'win_college');

// Regiser user
if (isset($_POST['register-btn'])) {
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

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address1 = $_POST['permanentAddress'];
    $address2 = $_POST['temporaryAddress'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
    $type = 'student';

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {

        $detail_query = "INSERT INTO student_details SET first_name=?,middle_name=?,last_name=?,dob=?,gender=?,address1=?,address2=?,email=?,mobile=?";
        $detail_stmt = $conn->prepare($detail_query);
        $detail_stmt->bind_param('sssssssss', $firstName, $middleName, $lastName, $dob, $gender, $address1,$address2,$email,$mobile);
        $detail_result = $detail_stmt->execute();
        // echo $detail_stmt->insert_id;exit;

        $user_query = "INSERT INTO users SET username=?, email=?, token=?, password=?, type=?, student_detail=?";
        $user_stmt = $conn->prepare($user_query);
        $detail_id = $detail_stmt->insert_id;
        $user_stmt->bind_param('sssssd', $username, $email, $token, $password, $type, $detail_id);
        $user_result = $user_stmt->execute();

        if ($user_result && $detail_result) {
            $user_id = $user_stmt->insert_id;
            $detail_stmt->close();
            $user_stmt->close();

            sendVerificationEmail($email, $token);

            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['success_message'] = 'You have registered sucessfully! Please check you email to verify your account';

            header('location: login.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

