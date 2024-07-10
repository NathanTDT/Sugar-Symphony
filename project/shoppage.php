
<?php
session_start();
require_once "conn.php";

if (isset($_COOKIE["user_login"]) && isset($_COOKIE["user_password"])) {
    $email = $_COOKIE["user_login"];
    $password = $_COOKIE["user_password"];

    $sql = "SELECT * FROM user_info WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result);

    if ($user) {
        $_SESSION["user"] = $user;
    } else {
        header("Location: projecthtml.html");
        exit();
    }
} elseif (!isset($_SESSION["user"])) {
    header("Location: projecthtml.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="projectcss.css">
    <title>Assorted desserts to satisfy your tastebuds</title>
    <head>

    </head>
    <style>
        .shop{
            background-image: linear-gradient(to right,#ff0048,#ff0048,#001eff,#001eff);
        }
    </style>
    <body>
        <div class="ribbon">
            <label for="companyname" id="companyname">Sugar <b>Symphony</b></label>
            <label class="welcome" id="welcome">Welcome <b> <?php echo $user['username']; ?></b></label>
        </div>
         
        
         <div class="navigate">   
        <input type="submit" value="HOME" class="home" onclick="homepage()">
        <input type="submit" value="ABOUT" class="about">
        <input type="submit" value="SHOP" class="shop">
        <input type="submit" value="MENU" class="menu">
        <input type="submit" value="YOU" class="you" onclick="youpage()">
        </div>
        
    </body>
<script src="projectjava.js"></script>

<script>
    function youpage() {
    window.location.href = "http://localhost/project/youpage.php";
}
function homepage(){
        window.location.href="http://localhost/project/homepage.php";
    }
</script>
</html>