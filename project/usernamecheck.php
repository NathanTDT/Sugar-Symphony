<?php
include("conn.php");

if (isset($_REQUEST["username"])) {
    $username = $_REQUEST['username'];
    checkUsername($conn, $username);
}

if (isset($_REQUEST["email"])) {
    $email = $_REQUEST['email'];
    checkEmail($conn, $email);
}

function checkUsername($conn, $username) {
    $query = "SELECT username FROM user_info WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    if($username===''){
        echo "<span style='color:red'>Username cannot be empty</span>";
    }
    elseif ($stmt->num_rows > 0) {
        echo "<span style='color:red'>This username already exists</span>";
    } else {
        echo "<span style='color:green'>This username is available</span>";
    }

    $stmt->close();
}

function checkEmail($conn, $email) {
    $query = "SELECT email FROM user_info WHERE email=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if($email===''){
        echo "<span style='color:red'>Email cannot be empty</span>";
    }
    elseif ($stmt->num_rows > 0) {
        echo "<span style='color:red'>This email already exists</span>";
    } else {
        echo "<span style='color:green'>This email is available</span>";
    }

    $stmt->close();
}
?>