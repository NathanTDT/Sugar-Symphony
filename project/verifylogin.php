<?php
session_start();
require_once "conn.php";

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user_info WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result);

    if ($user) {
        $_SESSION["user"] = $user;
        if (!empty($_POST["remember"])) {
            setcookie("user_login", $user["email"], time() + (10 * 365 * 24 * 60 * 60));
            setcookie("user_password", $user["password"], time() + (10 * 365 * 24 * 60 * 60));
        }

        header("Refresh: 1; URL=homepage.php"); 
    } else {
        echo "<script>
            alert('Invalid Login Credentials');
            window.location.href ='projecthtml.html';
        </script>";
    }
} elseif (empty($_COOKIE["user_login"]) || empty($_COOKIE["user_password"])) {
    echo "<script>
        alert('Username and password cannot be empty!');
        window.location.href='projecthtml.html';
    </script>";
}
?>