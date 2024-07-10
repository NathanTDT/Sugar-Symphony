<?php
session_start();
require_once "conn.php";

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
} else {
    // Redirect the user to the login page if not logged in
    header("Location: projecthtml.html");
    exit();
}

if (isset($_POST["logout"])) {
    unset($_SESSION["user"]);
    session_destroy();

    if (isset($_COOKIE["user_login"]) && isset($_COOKIE["user_password"])) {
        setcookie("user_login", '', time() - 3600);
        setcookie("user_password", '', time() - 3600);
    }

    header("Location: projecthtml.html");
    exit();
}

// Check if the form is submitted for data update
if (isset($_POST["confirm"])) {
    $newUsername = $_POST["new_username"];
    $newEmail = $_POST["new_email"];
    $newPhone = $_POST["new_phone"];
    $newAddress = $_POST["new_address"];

    // Perform the update query
    $updateQuery = "UPDATE user_info SET username = '$newUsername', email = '$newEmail', phone = '$newPhone', location = '$newAddress' WHERE user_id = '{$user['user_id']}'";
    
    if (mysqli_query($conn, $updateQuery)) {
        // Update the $user array with new values
        $user['username'] = $newUsername;
        $user['email'] = $newEmail;
        $user['phone'] = $newPhone;
        $user['location'] = $newAddress;
        $_SESSION["user"] = $user;

        echo "<script>alert('Data Updated successfully');</script>";
        header("Location: youpage.php");
    exit();
    } else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST["delete"])) {
    $deleteQuery = "DELETE FROM user_info WHERE user_id = '{$user['user_id']}'";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>alert('Thank you for being part of Sugar Symphony');</script>";
        header("Location:projecthtml.html");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF3AD;
            color: #333;
        }

        header {
            background-color: #4e4e4e;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        .abt_you {
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            color: #232f3e;
        }

        footer {
            background-color: #4e4e4e;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .pfp{
            height:8rem;
            width:8rem;
            border-radius:50%;
            background:none;
            background-image: url('login.png');
            background-size:5rem;
            background-position: bottom;
            background-position: center;
            background-repeat: no-repeat;
        }
        .user_info{
            display:flex;
        }
        .user_data{
            margin-left:2rem;
        }
        .goback{
            float: left;
            background-color:grey;
            height:2rem;
            border-radius:3rem;
            margin-top:1.5%;
            color:white;
            appearance: none;
            outline:none;
            border:none;
        }
        .goback:hover{
            background-color:#b8b8b8;
        }
        .goback:active{
            background-color:#6e6e6e;
        }
        .edit{
            float:bottom;
            height:2rem;
            width:3rem;
            margin-top:15%;
            
        }
        .dummy1{
            flex:6;
        }
        .logout {
            max-width: 52.5rem;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            display:flex;
        }
        .logout_btn{
            width:100%;
            height:3rem;
            text-align:left;
            background:none;
            border:none;
            background-image:url('logout.png');
            background-size:1rem;
            background-repeat:no-repeat;
            background-position: bottom;
            background-position: left;
            background-position-x: 98%;
            margin-left:1rem;
            font-weight:600;
        }
        .delete{
            max-width: 52.5rem;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            display:flex;
        }
        .delete_btn{
            width:100%;
            height:3rem;
            text-align:left;
            background:none;
            border:none;
            margin-left:1rem;
            font-weight:600;
        }
        .delete:hover{
            background-color:#ff8a82;
        }
        .delete:active{
            background-color:#ff3729;
        }
        .logout:hover{
            background-color:#e6e6e6;
        }
        .logout:active{
            background-color:#a1a1a1;
        }
        .edit{
            font-weight:600;
            background:none;
            border-radius:1rem;
            border:none;
            background:#6eccff;
            width:5rem;
        }
        .edit:hover{
            background:#8ad6ff;
        }
        .edit:active{
            background:#00a6ff;
        }
        .confirm{
            font-weight:600;
            background:none;
            border-radius:1rem;
            height:2.2rem;
            width:5rem;
            display:none;
            border:none;
            background:#a8ffb1;
        }
        .confirm:hover{
            background:#c7ffcd;
        }
        .confirm:active{
            background:#1bf531;
        }
        .new_username,.new_email,.new_phone,.new_address{
            background:none;
            border:none;
        }
    </style>
</head>
<body>
    <header>
        <input type="button" class="goback" value="Go back" onclick="goback()">
        <h1>Your Sugar Symphony Profile</h1>
    </header>
<form action="youpage.php" method="post">
    <div class="abt_you">
        <h2>About You</h2>
        <div class="user_info">
        <input type="button" name="pfp" class="pfp">
        <div class="user_data">
        Username: 
        <input type="text" name="new_username" class="new_username" id="new_username" value="<?php echo $user['username']?>" disabled><br><br>
        Email: 
        <input type="text" name="new_email" class="new_email" id="new_email" value="<?php echo $user['email']?>" disabled><br><br>
        Phone Number:
        <input type="text" name="new_phone" class="new_phone" id="new_phone" value="<?php echo $user['phone']?>" disabled><br><br>
        Address: 
        <input type="text" name="new_address" class="new_address" id="new_address" value="<?php echo $user['location']?>" disabled><br><br>
        </label>
        </div>
        <div class="dummy1"></div>
        <div class="btn">
        <input type="button" name="edit" value="EDIT" class="edit" id="edit">
        <input type="submit" value="CONFIRM" id="confirm" name="confirm" class="confirm">
        </div>
        </div>
        
    </div>
    <div class="delete">
    <input type="submit" name="delete" value="DELETE USER" class="delete_btn">
    </div>
    <div class="logout">
    <input type="submit" name="logout" value="LOG OUT" class="logout_btn">
    </div>
    </form>
    <footer>
        <p>Thank you for visiting Your Sugar Symphony Profile!</p>
    </footer>
</body>
<script>
function goback() {
    window.location.href = 'http://localhost/project/homepage.php';
}

const editbtn = document.getElementById('edit');
const confirmbtn = document.getElementById('confirm');
const usernametxt = document.getElementById('new_username');
const emailtxt = document.getElementById('new_email');
const phonetxt = document.getElementById('new_phone');
const locationtxt = document.getElementById('new_address');

editbtn.onclick = function () {
    if (editbtn.style.display === 'block' || editbtn.style.display === '' || editbtn.style.display === 'inline') {
        editbtn.style.display = 'none';
        confirmbtn.style.display = 'block';
        usernametxt.disabled = false;
        emailtxt.disabled = false;
        phonetxt.disabled = false;
        locationtxt.disabled = false;
        usernametxt.style.backgroundColor  = '#e6e6e6';
        emailtxt.style.backgroundColor  = '#e6e6e6';
        phonetxt.style.backgroundColor  = '#e6e6e6';
        locationtxt.style.backgroundColor  = '#e6e6e6';
    } else {
        editbtn.style.display = 'block';
        confirmbtn.style.display = 'none';
        usernametxt.disabled = true;
        emailtxt.disabled = true;
        phonetxt.disabled = true;
        locationtxt.disabled = true;
    }
};
</script>


</html>
