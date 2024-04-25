<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
        
        $sql="select * from register where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from register where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO register(username, email, password) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: login.php");
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signup.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Campus Event Navigator - Sign Up</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body style="margin: 0px; padding: 0">
    <style>
      .topnav {
        background-color: #255091;
        border-top: 0.001px solid rgb(120, 120, 124);
        overflow: hidden;
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
      }

      .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 23px;
      }

      .topnav-right a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav a.active {
        background-color: #04aa6d;
        color: white;
      }

      .topnav-right {
        float: right;
      }
      
      

      input[type="text"] 
      input[type="email"],
      input[type="password"] 
      {
        width: 150px;
        height: 40px; 
        font-size: 16px;
      }
      input[type="submit"],
      {
        width: 200px;
        height: 45px; 
        font-size: 16px;
      }
    </style>

    <div class="topnav">
      <a class="welcome" href=""><b>Campus Event Navigator</b></a>
      <div class="topnav-right">
        <a href="index.html">Back to Home</a>
      </div>
    </div>

    <div class="container">
      <div class="screen">
        <div class="screen__content">
          <form class="login" action="signup.php" method="post">
            <div class="login__field">
              
              <input type="text" id="user" name="user" placeholder="Full Name" required />
              <i class="login__icon fas fa-user"></i>
            </div>
            <div class="login__field">
              
              <input type="email" id="user" name="email" placeholder="Email" required />
              <i class="login__icon fas fa-envelope"></i>
            </div>
            <div class="login__field">
              
              <input type="password" id="user" name="pass" placeholder="Password" required />
              <i class="login__icon fas fa-lock"></i>
            </div>
            <div class="login__field">
              
              <input type="password" id="user" name="cpass" placeholder="Retype Password" required />
              <i class="login__icon fas fa-lock"></i>
            </div>
            <div class="login__field">
              
              <input type="submit" id="btn"  value="Signup" name="submit"/>
              <i class="button__icon fas fa-chevron-right"></i>
            </div>

            
          </form>
          
        </div>
        <div class="screen__background">
          <span
            class="screen__background__shape screen__background__shape4"
          ></span>
          <span
            class="screen__background__shape screen__background__shape3"
          ></span>
          <span
            class="screen__background__shape screen__background__shape2"
          ></span>
          <span
            class="screen__background__shape screen__background__shape1"
          ></span>
        </div>
      </div>
    </div>
    <style>
      .foot-panel-3 {
        background-color: #09234a;
        color: white;
        border-top: 0.001px solid rgb(120, 120, 124);
        height: 70px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        border-top-left-radius: 65px;
        border-top-right-radius: 65px;
      }

      .see {
        text-align: center;
        font-size: 0.85rem;
      }

      .foot-panel-4 {
        background-color: #09234a;
        color: white;
        height: 100px;
        font-size: 0.92 rem;
        text-align: center;
      }

      .pages {
        /**font-size: 0.7rem;
text-align: center;**/
        padding-top: 25px;
      }
      .copyright {
        /**font-size: 0.7rem;
text-align: center;**/
        padding: 5px;
      }
    </style>

    <footer>
      <div class="foot-panel-3">
        <div class="social-media">
          <p>Don't forget to follow us!</p>
        </div>
        <div class="twitter">
          <a href=""><img src="twitter_5969020.png" height="40" /></a>
        </div>
        <div class="lindin">
          <a href=""><img src="linkedin_4782336.png" height="40" /></a>
        </div>
        <div class="insta">
          <a href=""><img src="instagram_4138124.png" height="45" /></a>
        </div>
        <div class="facebook">
          <a href=""><img src="facebook_5968764.png" height="40" /></a>
        </div>
      </div>

      <div class="foot-panel-4">
        <div class="pages">
          Copyright © 2024 Campus Event Navigator. All rights reserved.
          &nbsp;&nbsp;&nbsp;
        </div>
      </div>
    </footer>
  </body>
</html>
