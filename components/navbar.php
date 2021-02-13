<?php

if(isset($_SESSION['user_id']))
{
echo'<div class="navbar">';
    echo'<a class="navbarleft" href="index.php">Home</a>';
    echo'<a class="navbarleft" href="product.php">Products</a>';
    echo'<a class="navbarleft" href="about.php">About</a>';
    echo'<a class="navbarleft" href="news.php">News</a>';
    echo'<a class="navbarleft" href="contactus.php">Contact Us</a>';
    echo'<a class="navbarright" href="logout.php">Logout</a>';
    echo'</div>';
}
else
    {
        echo'<div class="navbar">';
    echo'<a class="navbarleft" href="index.php">Home</a>';
    echo'<a class="navbarleft" href="product.php">Products</a>';
    echo'<a class="navbarleft" href="about.php">About</a>';
    echo'<a class="navbarleft" href="news.php">News</a>';
    echo'<a class="navbarleft" href="contactus.php">Contact Us</a>';
    echo'<a class="navbarright" href="register.php">Register</a>';
    echo'<a class="navbarright" href="login.php">Login</a>';
    
    
    echo'</div>';
    }


?>
