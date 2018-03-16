<?php 
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
    }
?>
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="p">
                <h1>PROPERTY SELLING</h1>
                <ul class="nav">
                    <li><a href="register1.php">Register</a></li>
                    <li><a href="login1.php">Login</a></li>
                </ul>
            </div>
            <div class="main-content">
                <h2>Register</h2>
                <form method="post" action="">
                    Your Name<br> <br><input type="text" id="Your Name" name="Name"> </br><br>
                    Email<br><br> <input type="text" id="Email" name="Email"> </br><br>
                    Password<br><br> <input type="text" id="Password" name="password"></br></br>
                    Retype Password<br><br> <input type="text" id="Retype Password" name="Retype"> <br><br> 
                    <input type="submit" name="sub" value="Click To Submit " class="bold"> 
                    </form>
            </div>
            
        </body>
    </html>

