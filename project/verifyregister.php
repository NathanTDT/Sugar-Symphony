<?php
require_once "conn.php";
session_start(); 

function isEmailAvailable($conn, $email) {
    $sql = "SELECT * FROM user_info WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows == 0; 
}

function isUsernameAvailable($conn, $username) {
    $sql = "SELECT * FROM user_info WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows == 0; 
}

if (isset($_POST['registerbtn'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["regionCode"] . $_POST["phone"]; 
    $password = $_POST["password"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
        alert('Invalid email format');
        window.location.href ='projectsignup.php';
        </script>";
        exit();
    }

    if (!preg_match("/^[0-9]{10}$/", $_POST["phone"])) {
        echo "<script>
        alert('Invalid phone number format');
        window.location.href ='projectsignup.php';
        </script>";
        exit();
    }

    if (empty($password) || strlen($password) < 8 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        echo "<script>
        alert('Password must be at least 8 characters long and contain both letters and numbers');
        window.location.href ='projectsignup.php';
        </script>";
        exit();
    }
    
    if (!isUsernameAvailable($conn, $username)) {
        echo "<script>
        alert('Username is already used');
        window.location.href ='projectsignup.php';
        </script>";
        exit();
    }

    if (!isEmailAvailable($conn, $email)) {
        echo "<script>
        alert('Email is already used');
        window.location.href ='projectsignup.php';
        </script>";
        exit();
    }

    $sql = "INSERT INTO user_info (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $phone, $password);

    if ($stmt->execute()) {
        $user = ["username" => $username, "email" => $email, "phone" => $phone, "location" => ""];
        $_SESSION["user"] = $user;
        setcookie("user_login", $user["email"], time() + (10 * 365 * 24 * 60 * 60));
        setcookie("user_password", $user["password"], time() + (10 * 365 * 24 * 60 * 60));

        echo "<script>
        alert('registration successful!');
        window.location.href ='homepage.php';
        </script>";
        exit();
    } else {
        echo "<script>
        alert('Error: Registration failed');
        window.location.href ='projectsignup.php';
        </script>";
        exit();
    }

    $stmt->close();
}
?>
