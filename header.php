<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="things/style.css">
</head>
<body>
    <section class="header">
        <nav>
            <ul>
                <li>HOME PAGE</li>
                <li>ABOUT US</li>
                <?php 
                if(isset($_SESSION['uID'])){
                    echo'<li>PROFILE</li>';
                    echo'<li><a href="logout.php">LOG OUT</a></li>';
                }else{
                    echo '<li><a href="signup.php">SIGN UP</a>';
                    echo '<li><a href="login.php">LOGIN</a></li>';
                    
                }
                ?>
            </ul>
        </nav>
    </section>
</body>
</html>