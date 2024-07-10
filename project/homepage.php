<?php
session_start();
require_once "conn.php";

$user = null;

if (isset($_COOKIE["user_login"]) && isset($_COOKIE["user_password"])) {
    $email = $_COOKIE["user_login"];
    $password = $_COOKIE["user_password"];
    $user=$_SESSION["user"] ;
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
        .home{
            background-image: linear-gradient(to right,#ff0048,#ff0048,#001eff,#001eff);
        }
    </style>
    <body>
        <div class="ribbon">
            <label for="companyname" id="companyname">Sugar <b>Symphony</b></label>
            <label class="welcome" id="welcome">Welcome <b> <?php echo $user['username']; ?></b></label>
        </div>
         
        
         <div class="navigate">   
        <input type="submit" value="HOME" class="home">
        <input type="submit" value="ABOUT" class="about">
        <input type="submit" value="SHOP" class="shop" onclick="shoppage()">
        <input type="submit" value="MENU" class="menu">
        <input type="submit" value="YOU" class="you" onclick="youpage()">
        </div>
        <div class="bg1">
        <div class="intro">
            <p ><b><h3>Welcome to SUGAR SYMPONY – Where Every Serving is a Celebration!</h3></b><br>

                Discover a world of frozen and desserty delights at Sugar Symphony, your go-to destination for the coolest treats in town. From creamy ice creams to tantalizing desserts, 
                we're here to satisfy your sweet cravings and elevate your dessert experience.</p>
        </div>
    </div>
    <div class="bg2">
        <div class="icecream">
            <b><label class="head2"> Ice Cream Extravaganza</label></b> <br><br>
            <label class="info2">
                Indulge in our premium ice cream flavors, each one a masterpiece of taste and texture. 
                From classic vanilla to exotic matcha swirl, our scoops are crafted with care to bring you the ultimate frozen bliss.</label>
            </label>
            </div>
    </div>
    <div class="bg3">
        <div class="sundae">
            <b><label class="head3"> Sundae Spectacular</label></b> <br><br>
            <label class="info3">
                Elevate your ice cream experience with our signature sundaes. Loaded with toppings, sauces, and all the extras, our sundaes are a feast for the eyes and a party for your taste buds
             </label>
            </div>
    </div>
    <div class="bg4">
        <div class="desserts">
            <b><label class="head4"> Dazzling Desserts</label></b> <br><br>
            <label class="info4">
                Treat yourself to our exquisite lineup of frozen desserts. 
                From ice cream cakes to gelato-filled macarons, our desserts are a perfect fusion of creativity and flavor.
                </label>
            </div>
    </div>
    <div class="bg5">
        <div class="cones">
            <b><label class="head5">  Create Your Own Cone</label></b> <br><br>
            <label class="info5">
                Unleash your inner dessert artist! Build your own ice cream cone with a variety of flavors, toppings, and drizzles. The possibilities are endless, and the result is always delicious.
            </label>
            </div>
    </div>
    <div class="bg6">
        <div class="service">
            <b><label class="head6">  Celebrate with Sugar Symphony</label></b> <br><br>
            <label class="info6">
                Planning a special event? Make it memorable with our custom ice cream cakes and catering services. Birthdays, weddings, or just a Friday night – every occasion is a reason to celebrate with Sugar Symphony. <br> <br>
                Our team is dedicated to serving you with a smile. Whether you're in a hurry or want to savor the moment, we offer fast and friendly service to make your Sugar Symphony experience even more enjoyable. <br>
            </label>
            </div>
    </div>
    <div class="bg7">
        <div class="loyalty">
            <b><label class="head7">  Sweet Deals & Loyalty Rewards</label></b> <br><br>
            <label class="info7">
                Join our loyalty program and enjoy sweet deals on your favorite treats. Because at Frosty Bliss, we believe that every loyal customer deserves a little extra sweetness.
             </label>
            </div>
    </div>
    <div class="bgfoot">
        <div class="footer">
            <b><label class="headfoot">Find Us</label></b> <br><br>
            <label class="infofoot">
                Visit our conveniently located store and escape into a world of frozen wonders. Can't make it in person? No worries – we offer speedy delivery services to bring the chill to your doorstep. <br> <br>
                Follow us on social media for sneak peeks of upcoming flavors, exclusive promotions, and a behind-the-scenes look at the magic happening in our kitchen. Join the Sugar Symphony community, and let's make every moment a celebration of sweetness! 🎉🍦 #SugarSymphonyDelights
            </label>
            </div>
    </div>

    </body>
<script src="projectjava.js"></script>

<script>
    function youpage() {
    window.location.href = "http://localhost/project/youpage.php";
}
    function shoppage(){
        window.location.href="http://localhost/project/shoppage.php";
    }
</script>
</html>