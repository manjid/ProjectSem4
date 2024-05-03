<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1E1E1E;
      /* change the background color to dark grey */
      margin: 0;
      padding: 0;
      color: #fff;
      /* change the text color to white */
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #333;
      /* change the container background color to a darker shade of grey */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      animation: glowing 2s infinite;
    }

    @keyframes glowing {
      0% {
        box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
        /* change the box-shadow color to a light shade of purple */

      }

      50% {
        box-shadow: 0 0 20px #301934, 0 0 50px #BB86FC;
        /* change the box-shadow color to a light shade of purple */

      }

      100% {
        box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
        /* change the box-shadow color to a light shade of purple */

      }
    }

    h3 {
      color: #fff;
      /* change the heading color to white */
      margin-top: 0;
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }

    form {
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="checkbox"] {
      align-item: ;
    }

    input[type="text"],
    input[type="password"] {
      padding: 8px;
      width: 96%;
      border: 0.5px solid #BB86FC;
      /* change the input border color to white */
      margin-bottom: 12px;
      background-color: transparent;
      /* make the input background color transparent */
      color: #fff;
      /* change the input text color to white */
      transition: box-shadow 0.3s;
    }

    input[type="text"]:hover,
    :focus,
    input[type="password"]:hover,
    :focus {
      box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
      /* change the box-shadow color to a light shade of purple */
    }

    input[type="submit"] {
      font-size: 15px;
      font-style: bold;
      margin-top: 10px;
      width: 100%;
      padding: 8px;
      border: 1px solid #BB86FC;
      /* change the input border color to white */
      background-color: #BB86FC;
      /* make the input background color transparent */
      color: #fff;
      /* change the input text color to white */
      transition: box-shadow 0.3s;
    }

    input[type="submit"]:hover {
      box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
      /* change the box-shadow color to a light shade of purple */
    }

    .create-account-link {
      text-align: center;
      margin-top: 16px;
    }

    .create-account-link a {
      color: #fff;
      /* change the link color to white */
      text-decoration: none;
      transition: color 0.3s;
    }

    .create-account-link a:hover {
      color: #BB86FC;
      /* change the hover link color to a light shade of purple */
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>LOGIN</h3>
    <form method="POST">
      <label for="username">Username:</label><br>
      <input type="text" name="username" autofocus required><br>
      <label for="password">Password:</label><br>
      <input type="password" name="password" id="myInput" required><br>
      <input type="checkbox" onclick="myFunction()">Show Password<br>
      <input type="submit" name="submit" value="LOGIN"><br>
    </form>
    <div class="create-account-link">
      <a href="register.php">Create Account</a>
    </div>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>



<?php
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "select * from Login where username = '$username' and password = '$password'";
  $result = mysqli_query($con, $query);
  $rows = mysqli_num_rows($result);
  if ($rows == 1) {
    $_SESSION['username'] = $username;
    header("location:home.php");
  } else {
    echo "<script> alert('Username atau Password Salah'); location = 'login.php'; </script>";
  }
}
?>

</html>