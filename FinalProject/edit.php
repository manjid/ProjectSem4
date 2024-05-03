<?php
include "connection.php";
$conn = mysqli_connect("localhost", "root", "", "testing_facility");
$ID = $_GET['ID'];
$m = "SELECT * FROM facility_list WHERE ID = '$ID' ";
$data = mysqli_query($conn, $m);
$row = mysqli_fetch_assoc($data); 

if (isset($_POST['Submit'])) {
    $fName = $_POST['fName'];
    $fRate = $_POST['fRate'];
    $edit = "UPDATE facility_list SET fname = '$fName', fRate = '$fRate' WHERE ID = '$ID' ";
    $e = mysqli_query($conn, $edit);
    if (!$e) {
        echo $conn->error;
    } else {
        header("location:view.php");
    }
}
?>
    <!DOCTYPE html>
<html>
<head>
<style>
     body {
      font-family: Arial, sans-serif;
      background-color: #1E1E1E;
      color: #FFFFFF;
      margin: 0;
      padding: 0;
      color: #fff; /* change the text color to white */
    }
    
    .container {
      max-width: 600px;
      margin: 100px auto;
      padding: 20px;
      background-color: #2E2E2E;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      animation: glowing 2s ease-in-out infinite;
    }
    
    @keyframes glowing {
      0% { box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;}
      50% { box-shadow: 0 0 20px #301934, 0 0 50px #BB86FC;}
      100% {box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;}
    }
    
    h3 {
      color: #fff; /* change the heading color to white */
      margin-top: 0;
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }
    
    fieldset {
      border: none;
      padding: 0;
      margin: 0;
    }
    
    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      margin-left: -11px;
      border: 0.5px solid #BB86FC; /* change the input border color to white */
      margin-top: 10px;
      background-color: #333;
      transition: box-shadow 0.3s;
      color: #fff; /* change the input text color to white */

    }

    input[type="text"]:hover,:focus,
    textarea:hover,:focus,
    select:hover,:focus {
      box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
    }
    
    input[type="submit"]{
      background-color: #0074D9;
      color: #FFFFFF;
      padding-top: 11px;
      padding-left: 15px;
      padding-right: 15px;
      padding-bottom: 7px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    input[type="submit"]{
      font-size: 15px;
      font-style: bold;
      padding: 5px 10px 5px 10px;
      border: 1px solid #BB86FC; /* change the input border color to white */
      background-color: #BB86FC; /* make the input background color transparent */
      color: #fff; /* change the input text color to white */
      transition: box-shadow 0.3s;
      margin-left: -10px;
    }
    
    input[type="submit"]:hover {
      box-shadow: 0 0 100px darkgreen, 0 0 30px green; /* change the box-shadow color to a light 
      shade of purple */
      background-color: lightgreen;
      border-color: green;
    }

    .back-button {
      font-size: 15px;
      font-style: bold;
      padding: 5px 20px 5px 20px;
      border: 1px solid #BB86FC; /* change the input border color to white */
      background-color: #BB86FC; /* make the input background color transparent */
      color: #fff; /* change the input text color to white */
      transition: box-shadow 0.3s;
    }

    .back-button:hover{
      box-shadow: 0 0 100px #8B0000, 0 0 30px maroon; /* change the box-shadow color to a light 
      shade of purple */
      background-color: red;
      border-color: maroon;;
      color: white;
    }

    a {
      color: white;
      text-decoration: none;
    }

    a:hover {
      color: #BB86FC;
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
     <ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="addFacility.php">ADD FACILITY</a></li>
  <li><a href="view.php">RECORD</a></li>
  <li><a href="searchFacility.php">SEARCH</a></li>
	<li style="float:right"><a class="exit" href="login.php "onclick="return confirm('Are you sure you want to Logout?'); ">X</a></li>
</ul>

    <title>Edit Facility</title>
</head>
<div class="container">
<h3>Edit Facility Details</h3>
<form method='POST'>

    Facility Name: <input type="text" name="fName" value="<?php echo $row['fName']; ?>"><br><br>
    Rate: <input type="text" name="fRate" value="<?php echo $row['fRate']; ?>"><br><br>
    <center>
    <input type="submit" name="Submit" value = "SUBMIT">
    <a class="back-button" href="view.php">BACK</a>
    </center>
</form>
</div>