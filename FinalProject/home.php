<?php
session_start();
include "connection.php";
if (!isset($_SESSION['username'])) {
  header("location:login.php");
  exit();
}
if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1E1E1E; /* change the background color to dark grey */
      margin: 0;
      padding: 0;
      color: #fff; /* change the text color to white */
    }
    
    .container {
      max-width: 600px;
      margin: 100px auto;
      padding: 20px;
      background-color: #333; /* change the container background color to a darker shade of grey */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      animation: glowing 2s infinite;
    }
    
    h3 {
      color: #fff; /* change the heading color to white */
      margin-top: 0;
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }
    
    .welcome-message {
      font-size: 20px;
      margin-bottom: 20px;
    }
    
    .link-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
    .link-container a {
      color: #fff;
      background-color: #2196F3;
      padding: 10px 20px;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3s;
      margin: 0 10px;
      font-size: 16px;
      border: 2px solid #1976D2;
      box-shadow: 0 0 10px #fff;
      animation: glowing 2s infinite;
    }
    
    @keyframes glowing {
      0% {
        box-shadow: 0 0 100px #301934, 0 0 30px #BB86FC; /* change the box-shadow color to a light shade of purple */

      }
      50% {
        box-shadow: 0 0 30px #301934, 0 0px 60px #BB86FC; /* change the box-shadow color to a light shade of purple */

      }
      100% {
        box-shadow: 0 0 100px #301934, 0 0 30px #BB86FC; /* change the box-shadow color to a light shade of purple */

      }
    }

   ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    
   }

   li {
    float: left;
    }

   li a {
   display: block;
   color: white;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   }

   li a:hover {
   background-color: #111;
   color: white;
   }

  .active {
   background-color: white;
   color: white;

   }

  .exit {
   background-color: red;
   font-style: bold;
  }
  .exit:hover{
   background-color: maroon;
   font-style: bold;
  }



  </style>
</head>
<body>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="addFacility.php">ADD FACILITY</a></li>
  <li><a href="view.php">RECORD</a></li>
  <li><a href="searchFacility.php">SEARCH</a></li>
  <li style="float:right"><a class="exit" href="login.php "onclick="return confirm('Are you sure you want to Logout?'); ">X</a></li>

</ul>
  <div class="container">
    <h3>WELCOME TO FACILITY PAGE</h3>
    <center>
    <p class="welcome-message">Welcome, <?php echo $_SESSION['username']; ?>!</p>
    </center>
  </div>
</body>
</html>
