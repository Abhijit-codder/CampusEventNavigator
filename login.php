<?php
/*
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>
<?php
    $login = false;
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        echo $password;
        $sql = "select * from register where username = '$username'or email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($row){  
            echo $count;

            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();

                $sql = "select username from register where username = '$username'or email = '$username'";     
                $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  

                $_SESSION['username']= $r['username'];
                $_SESSION['loggedin'] = true;
                header("Location: index.php");
            }
        }  
        else{  
            echo  '<script>
                        
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "login.php";
                    </script>';
        }     
    }*/
    ?>
<?php
if(isset($_POST['submit'])){
  include "connection.php";
  $username = mysqli_real_escape_string($conn,$_POST['user']);
  $password = mysqli_real_escape_string($conn,$_POST['pass']);

  $sql = "select * from register where username = '$username'or email = '$username'";  
  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

  if($row)
  {
    if(password_verify($password,$row["password"])){
      header("Location: welcome.php");
    }
  }
  else
  {
    echo
    '<script>
    alert("Login failed. Invalid username or password!!")window.location.href = "login.php";
    </script>';

  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Campus Event Navigator-Login</title>
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
  <body style="margin: 0px;padding: 0;">
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
      input[type="text"],
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
          <form class="login" action="login1.php" method="post">
            <div class="login__field">
              
              <input
                type="text"
                id="user"
                name="user"
                placeholder="User name / Email"
              />
              <i class="login__icon fas fa-user"></i>
            </div>
            <div class="login__field">
              
              <input
                type="password"
                id="pass"
                name="pass"
                class="login__input"
                placeholder="Password"
              />
              <i class="login__icon fas fa-lock"></i>
            </div>
            <div class="login__field">
              
              <input type="submit" id="btn"  value="LogIn" name="submit"/>
            </div>
            <button class="button login__submit">
              <a href="signup.php">New user! Sign Up Here</a>
              
            </button>
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
            background-color:#09234a;
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
        
      </div>
    </div>
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
