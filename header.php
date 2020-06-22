<?php

include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>The Fresh Food Factory</title>
</head>
<body>
    <header>
        <input type="checkbox" name="" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li class="link-item <?php setActive("index"); ?>"><a href="index.php">Home</a></li>
                <li class="link-item <?php setActive("what-we-do"); ?>"><a href="what-we-do.php">What we do</a></li>
                <li class="link-item <?php setActive("about-us"); ?>"><a href="about-us.php">About us</a></li>
                <li class="link-item <?php setActive("book-a-session"); ?>"><a href="book-a-session.php">Book a session</a></li>
                <li class="link-item <?php setActive("contact-us"); ?>"><a href="contact-us.php">Contact Us</a></li>                
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
        <div class="logo-box <?php checkHero(); ?>">
            <div class="logo">
                <img src="assets/ffflogomobile.jpg">            
            </div>
            <div class="featured-image">                
                <img src="assets/featured.jpg">            
            </div>  
        </div>

    </header>