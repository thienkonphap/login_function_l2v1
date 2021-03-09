<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    <div class="logo">
        <img src="../Calendariumblanc_transparent.png" alt="">
    </div>
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">News</a></li>
        <?php
        if (isset($_SESSION["useruid"])){
            echo "<li><a href='#'>Profile Page</a></li>
            <li><a href='includes/logout.inc.php'>Log out</a></li>";
        }
        else {
            echo "<li><a href='#'>Sign Up</a></li>
        <li><a href='#'>Sign In</a></li>";
        }
         ?>


    </ul>
</nav>
    
</body>
</html>

