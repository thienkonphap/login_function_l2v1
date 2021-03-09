
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header/header.css" type  ="text/css">
    <link rel="stylesheet" href="css/style.css" type  ="text/css">
    <title>Document</title>
</head>
<body>
<?php include 'header/header.php' ?>
    <div class="cotn_principal">
    <div class="cont_centrar">

    <div class="cont_login">
    <div class="cont_info_log_sign_up">
        <div class="col_md_login">
    <div class="cont_ba_opcitiy">
            
            <h2>LOGIN</h2>  
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
    <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
    </div>
    </div>
    <div class="col_md_sign_up">
    <div class="cont_ba_opcitiy">
    <h2>SIGN UP</h2>

    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

    <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
    </div>
    </div>
        </div><?php 
            if (isset($_GET["error"])){
                if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login information</p>";
                }
                else if($_GET["error"] == "emptyinput"){
                    echo "<script> alert('Fill in all fields');</scritp>";
                }
            }?>
        
        <div class="cont_back_info">
        <div class="cont_img_back_grey">
        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
        </div>
        
        </div>
    <div class="cont_forms" >
        <div class="cont_img_back_">
        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
        </div>
    <form action="includes/login.inc.php" method="post">
    <div class="cont_form_login">
        <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
        <h2>LOGIN</h2>
        
        <input type="text" placeholder="Username/Email..." name="uid"/>
        <input type="password" placeholder="Password"name="pwdlogin" />
        <button type="submit" name="submitlogin"class="btn_login" onclick="cambiar_login()">LOGIN</button>   
    </div>
    </form>
    <div class="cont_form_sign_up">
    <form action="includes/signup.inc.php" method="post">
        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
            <h2>SIGN UP</h2>
            <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Chose a proper username !</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Chose a proper Email !</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords doesn't match !</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>You have sign up</p>";
        }
    }
?>
        <input type="text" placeholder="Full name..." name ="name"/>
        <input type="text" placeholder="Username..." name="uid" />
        <input type="text" placeholder="Email..."name="email" />
        <input type="password" placeholder="Password..." name="pwd" />
        <input type="password" placeholder="Password Repeat..." name="pwdrepeat" />
        <button type ="submit" name="submitsignup"class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
    </form>
    </div>

        </div>
        
    </div>
    </div>
    </div>
    <?php if(isset($_SESSION["useruid"])){
        echo "<script>alert('log in sucessful');</script>";
    } 
    ?>
</body>    
<script src="js/script.js"></script>

</html>