<?php
include "connection.php";
if (isset($_POST['Submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $repeatPassword = $_POST['repeatPassword'];

  if ($password != $repeatPassword) {
    echo "<script> alert('Password did not match');</script>";
    echo mysqli_error($conn);
  } else {

    $insert = "INSERT INTO Login(username,password) VALUES ('$username','$password')";
    if (mysqli_query($con, $insert)) {

      echo '<script>alert("Data has been succesfully inserted!");</script>';
    } else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Create Account</title>
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
      box-shadow: 0 500px 500px rgba(0, 0, 0, 0.1);
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
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      padding: 8px;
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
      font-sizeof: 12px;
      font-style: bold;
      padding: 8px;
      margin-top: 10px;
      width: 100%;
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


    .login-link {
      text-align: center;
      margin-top: 16px;
    }

    .login-link a {
      color: #fff;
      /* change the link color to white */
      text-decoration: none;
      font-sizeof: 12px;
      font=style: bold;
      transition: color 0.3s;
    }

    .login-link a:hover {
      color: #BB86FC;
      /* change the hover link color to a light shade of purple */
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>CREATE ACCOUNT</h3>
    <form method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" required>
      <label for="password">Password:</label>
      <input type="password" name="password" id="myInput" require>
      <label for="repeatPassword">Repeat Password:</label>
      <input type="password" name="repeatPassword" id="myInput1" require>
    </form>
    <input type="checkbox" onclick="myFunction()">Show Password<br>
    <input type="submit" name="Submit" value="Create Account">
    <div class="login-link">
      <a href="login.php">Login</a>
    </div>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      var y = document.getElementById("myInput1");

      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
  </script>
</body>

</html>